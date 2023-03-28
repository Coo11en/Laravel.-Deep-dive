<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index($id): View
    {
        $news = $this->news(1);
        return \view('news.index', [
            'news' => $news
        ]);
    }
}
