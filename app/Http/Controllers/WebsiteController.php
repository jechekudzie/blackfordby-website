<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    //index
    public function index()
    {
        return view('website.index');
    }

    //about us
    public function about()
    {
        return view('website.about');
    }

    //contact us

    public function contact()
    {
        return view('website.contact');
    }

    //programs
    public function programs()
    {
        return view('website.programs');
    }

    //website.programs.fulltime
    public function fulltime()
    {
        return view('website.programs.fulltime');
    }

    //website.programs.parttime
    public function parttime()
    {
        return view('website.programs.parttime');
    }

    //admissions
    public function admissions()
    {
        return view('website.admissions');
    }

    //website.online-application
    public function onlineApplication()
    {
        return view('website.onlineapplication');
    }

    //studentlife
    public function studentlife()
    {
        return view('website.studentlife');
    }

    //downloads
    public function downloads()
    {
        return view('website.downloads');
    }

    //send email using mail
    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $data = $request->only(['name', 'email', 'message']);

        // Send the email
        Mail::to('info@blackfordbyagric.ac.zw')->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


}
