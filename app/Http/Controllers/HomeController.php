<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeContent;
use App\FacebookPixel;
use App\GoogleAnalytics;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home_content = HomeContent::find(1);
        $facebook_pixel_id = FacebookPixel::find(1);
        $google_analytics_id = GoogleAnalytics::find(1);
        return view('home', compact('home_content', 'facebook_pixel_id', 'google_analytics_id'));
    }
}
