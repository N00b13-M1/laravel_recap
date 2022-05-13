<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Symfony\Component\HttpFoundation\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials =  Testimonial::all();
        // dd($testimonials);
        return view ('back.pages.testimonials.all', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimonialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
			'poster_name_big' => 'required',
			'date' => 'required',
			'category' => 'required',
			'rating' => 'required|min:0|max:5',
            'quote' => 'required',
            'headshot' => 'required',
			'poster_name_small' => 'required',
            'poster_title' => 'required',
		]);


        $testimonial = new Testimonial;
        $testimonial->poster_name_big = $request->poster_name_big;
        $testimonial->date = $request->date;
        $testimonial->category = $request->category;
        $testimonial->rating = $request->rating;
        $testimonial->quote = $request->quote;
        $testimonial->headshot = $request->file('headshot')->hashName();
        $testimonial->poster_name_small = $request->poster_name_small;
        $testimonial->poster_title = $request->poster_title;

        $testimonial->save();
        $request->file('headshot')->storePublicly('assets/images', 'public');
        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('back.pages.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('back.pages.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimonialRequest  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
			'poster_name_big' => 'required',
			'date' => 'required',
			'category' => 'required',
			'rating' => 'required|min:0|max:5',
            'quote' => 'required',
            'headshot' => 'required',
			'poster_name_small' => 'required',
            'poster_title' => 'required',
		]);

        $testimonial->poster_name_big = $request->poster_name_big;
        $testimonial->date = $request->date;
        $testimonial->category = $request->category;
        $testimonial->rating = $request->rating;
        $testimonial->quote = $request->quote;
        $testimonial->headshot = $request->headshot;
        $testimonial->poster_name_small = $request->poster_name_small;
        $testimonial->poster_title = $request->poster_title;

        $testimonial->save();
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index', compact('testimonial'));
    }
}
