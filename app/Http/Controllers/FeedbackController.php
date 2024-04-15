<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
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
=======

class FeedbackController extends Controller
{
    /**
     * Show the form for creating a new feedback.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // You can return a view here to display a form for creating feedback
        return view('feedbackform');
    }

    /**
     * Send the feedback.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        // Handle the feedback submission here
        // You can access submitted data using $request->input('field_name')
        // For example, $request->input('message') to get the message content
        
        // You can also validate the incoming data before processing it
        $validatedData = $request->validate([
            'message' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Process the feedback, store it in the database, or send it via email, etc.

        // Redirect the user back to the feedback form or wherever appropriate
        return redirect()->back()->with('success', 'Feedback sent successfully!');
>>>>>>> origin/main
    }
}
