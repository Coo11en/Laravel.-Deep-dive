<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category()
    {
        $category = $this->categories();
        return view('category.category', ['category' => $category]);
    }
}
