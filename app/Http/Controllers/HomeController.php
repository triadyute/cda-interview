<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeContent;
use App\GooglePixelId;
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
        $google_pixel_id = GooglePixelId::find(1);
        return view('home', compact('home_content', 'google_pixel_id'));
    }
}
