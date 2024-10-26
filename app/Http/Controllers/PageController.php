<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $page = 'About Us'; // Set the value of the page variable
        return view('pages.about', compact('page')); // Pass the variable to the view
    }




    public function contact()
    {
        $page = 'Contact Us'; // Set the value of the page variable
        return view('pages.contact', compact('page')); // Pass the variable to the view
    }

    public function blog()
    {
        $page = 'Blog'; // Set the value of the page variable
        return view('pages.blog', compact('page')); // Pass the variable to the view
    }

    public function project()
    {
        $page = 'Project'; // Set the value of the page variable
        return view('pages.project', compact('page')); // Pass the variable to the view
    }

    public function service()
    {
        $page = 'Services'; // Set the value of the page variable
        return view('pages.service', compact('page')); // Pass the variable to the view
    }

    public function team()
    {
        $page = 'Team'; // Set the value of the page variable
        return view('pages.team', compact('page')); // Pass the variable to the view
    }

    public function testimonials()
    {
        $page = 'Testimonials'; // Set the value of the page variable
        return view('pages.testimonials', compact('page')); // Pass the variable to the view
    }

    public function subscribe(Request $request)
{
    // Validate the email address
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Prepare the email data
    $email = $request->input('email');
    $recipient_email = 'mrashid2000@gmail.com';
    $email_subject = "New Subscription from {$email}";
    $email_body = "You have a new subscriber: {$email}";

    // Send the email
    Mail::raw($email_body, function ($message) use ($email, $email_subject, $recipient_email) {
        $message->from($email);
        $message->to($recipient_email);
        $message->subject($email_subject);
    });

    // Flash a success message to the session
    $request->session()->flash('info', 'Thank you for subscribing! You will receive exclusive offers.');

    // Redirect back to the form
    return redirect()->back();
}
}
