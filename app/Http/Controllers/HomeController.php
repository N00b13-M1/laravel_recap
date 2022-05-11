<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Testimonial;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $banner = Banner::first();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $icons = ['first', 'second', 'third', 'fourth'];
        $testimonial_up = ['first-thumb active','','','',''];
        $testimonial_down = ['active','','','','last-thumb'];
        return view('front.home', compact('banner', 'services', 'testimonials', 'icons', 'testimonial_up', 'testimonial_down'));
    }
}
