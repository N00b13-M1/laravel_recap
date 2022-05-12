<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use Symfony\Component\HttpFoundation\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner =  Banner::first();
        // dd($banner);
        return view ('back.pages.banner.all', compact('banner'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit( Banner $banner, $id )
    {
        $banner = Banner::find($id);
        return view('back.pages.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner, $id)
    {
        $validated = $request->validate([
			'title' => 'required',
			'p' => 'required',
			'quotelink1' => 'required',
			'quotetext1' => 'required',
            'quotelogo1' => 'required',
            'quotelink2' => 'required',
			'quotetext2' => 'required',
            'quotelogo2' => 'required',
            'image' => 'required'
		]);

        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->p = $request->p;
        $banner->quotelink1 = $request->quotelink1;
        $banner->quotetext1 = $request->quotetext1;
        $banner->quotelogo1 = $request->quotelogo1;
        $banner->quotelink2 = $request->quotelink2;
        $banner->quotetext2 = $request->quotetext2;
        $banner->quotelogo2 = $request->quotelogo2;
        $banner->image = $request->image;
        $banner->save();

        return redirect()->route('banner.index')->with("update", "Successfully Updated");
        ;

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
