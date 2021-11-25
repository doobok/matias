<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Page;

class SitemapController extends Controller
{
    public function sitemap()
    {
      $mainpage_date = Project::orderBy('created_at', 'DESC')->value('updated_at');
      $pages = Page::orderBy('created_at', 'DESC')->select('id', 'slug', 'updated_at')->get();
      $projects = Project::orderBy('created_at', 'DESC')->select('id', 'slug', 'updated_at')->get();

      return response()->view('main.sitemap', [
                'pages' => $pages,
                'projects' => $projects,
                'mainpage_date' => $mainpage_date,
        ])->header('Content-Type', 'text/xml');
    }

    public function mappage()
    {
      $pages = Page::where('parrent', null)->where('slug', '!=', 'policy')->orderBy('created_at', 'ASC')->select('id', 'slug', 'heading')->get();

      return response()->view('main.pages.sitemap', [
                'pages' => $pages,
        ]);
    }
}
