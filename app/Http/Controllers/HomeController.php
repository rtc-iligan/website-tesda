<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function reservation()
    {
        return view('frontend.others.reservation');
    }
    public function locationmap()
    {
        return view('frontend.about.location-map');
    }
    public function missionvision()
    {
        return view('frontend.about.missionvision');
    }
    public function organizationalstructure()
    {
        return view('frontend.about.organizational-structure');
    }
    public function rtcpersonnel()
    {
        return view('frontend.about.rtc-personnel');
    }
    public function contactus()
    {
        return view('frontend.others.contactus');
    }
    public function gallery()
    {
        return view('frontend.others.gallery');
    }
    public function newsupdates()
    {
        return view('frontend.others.newsupdates');
    }
    public function successtories()
    {
        return view('frontend.others.successtories');
    }
    public function requirements()
    {
        return view('frontend.others.requirements');
    }
}
