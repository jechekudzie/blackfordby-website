<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
