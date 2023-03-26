<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    public function newsCategory($id)
    {
        $news = $this->newsList($id);
        $category = $this->categories()[$id];
        return view('news.newsCategory', [
            'news' => $news,
            'category' => $category
        ]);
    }
}
