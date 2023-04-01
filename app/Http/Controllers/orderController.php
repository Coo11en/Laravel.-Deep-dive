<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class orderController extends Controller
{
    public function order(): View
    {
        return \view('orders.order');
    }

    public function addOrder(Request $request)
    {
        $request->validate(['login' => ['required', 'string', 'min:5', 'max:20'],
            'phone' => ['required', 'string', 'min:2', 'max:250'],
            'email' => ['required', 'string', 'min:2', 'max:250'],
            'info' => ['required', 'string', 'min:2', 'max:250']]);
        Storage::append('order.txt', now() . ' ' . 'login: ' . $request->login . ' ' . 'phone: ' . $request->phone . ' ' . 'email: ' . $request->email . ' ' . 'info: ' . $request->info);
        return \view('orders.order');
    }
}
