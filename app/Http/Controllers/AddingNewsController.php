<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AddingNewsController extends Controller
{
    public function adding(): View
    {
        return \view('news.adding');
    }
}
