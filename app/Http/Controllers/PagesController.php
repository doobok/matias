<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function page($slug)
    {
      $page = Page::where('slug', $slug)->firstorfail();

      // get breadcrumbs
      $breadcrumbs = collect();
      // добавляем ссылку на текущий елемент
      $breadcrumbs->prepend(['', $page->getTranslatedAttribute('heading')]);
      // находим родителя
      $par = $page->parent()->first();
      // получим всех родителей по цепочке к главному
      while ($par) {
        $breadcrumbs->prepend([route('page', $par->slug), $par->getTranslatedAttribute('heading')]);
        $par = $par->parent()->first();
      }

      return view('main.pages.page', [
        'page' => $page,
        'breadcrumbs' => $breadcrumbs,
      ]);
    }
}
