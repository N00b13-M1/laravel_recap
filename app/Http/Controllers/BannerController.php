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
    public function edit( $id )
    {
        $bannerEdit = Banner::find($id);
        return view('back.pages.banner.edit', compact('bannerEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bannerEdit = Banner::find($id);
        $bannerEdit->title = $request->title;
        $bannerEdit->p = $request->p;
        $bannerEdit->quotelink1 = $request->quotelink1;
        $bannerEdit->quotetext1 = $request->quotetext1;
        $bannerEdit->quotelogo1 = $request->quotelogo1;
        $bannerEdit->quotelink2 = $request->quotelink2;
        $bannerEdit->quotetext2 = $request->quotetext2;
        $bannerEdit->quotelogo2 = $request->quotelogo2;
        $bannerEdit->image = $request->image;
        $bannerEdit->save();
        return redirect()->action([BannerController::class, 'index']);

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
