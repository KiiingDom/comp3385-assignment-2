<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;


class FeedbackController extends Controller
{
    public function create() 
    {
        return view('feedback-form');
    }
    public function send(Request $request): RedirectResponse 
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required'
        ]);

        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
        ->send(new Feedback($request->input('name'), $request->input('email'), $request->input('comments')));

        return redirect('/feedback/success');
    }
    public function success() 
    {
        return view('success');
    }
}
