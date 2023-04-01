<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class feedbackController extends Controller
{
    public function feedback(): View
    {
        return \view('feedbacks.feedback');
    }

    public function addFeedback(Request $request)
    {
        $request->validate(['login' => ['required', 'string', 'min:5', 'max:20'],
            'comment' => ['required', 'string', 'min:2', 'max:250']]);
        Storage::append('exemple.txt', now() . ' ' . 'login: ' . $request->login . ' ' . 'comment: ' . $request->comment);
        return \view('feedbacks.feedback');
    }
}
