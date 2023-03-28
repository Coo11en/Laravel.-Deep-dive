<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthorizationController extends Controller
{
    public function authorization(): View
    {
        return \view('authorization.authorization');
    }
}
