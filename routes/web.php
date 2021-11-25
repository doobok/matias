<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){

  Route::get('/', 'App\Http\Controllers\MainpagesController@index')->name('mainpage');
  Route::get('/contacts', 'App\Http\Controllers\MainpagesController@contacts')->name('contacts');
  Route::get('/portfolio', 'App\Http\Controllers\MainpagesController@portfolio')->name('portfolio');
  Route::get('/portfolio/{slug}', 'App\Http\Controllers\MainpagesController@project')->name('project');
  Route::get('/partners', 'App\Http\Controllers\MainpagesController@partners')->name('partners');
  Route::get('/services', 'App\Http\Controllers\MainpagesController@services')->name('services');

  Route::get('/sitemap.xml', 'App\Http\Controllers\SitemapController@sitemap')->name('sitemap');
  Route::get('/sitemap', 'App\Http\Controllers\SitemapController@mappage')->name('mappage');

  Route::get('/{slug}', 'App\Http\Controllers\PagesController@page')->name('page');
});

//Переключение языков
Route::get('setlocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
    }

    //формируем полный URL
    $url = Request::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('setlocale');
