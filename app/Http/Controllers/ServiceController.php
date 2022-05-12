<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Symfony\Component\HttpFoundation\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services =  Service::all();
        // dd($services);
        return view ('back.pages.services.all', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.services.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'href_link' => 'required',
			'href_text' => 'required',
            'href_logo' => 'required'
		]);

        $service = new Service;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->href_link = $request->href_link;
        $service->href_text = $request->href_text;
        $service->href_logo = $request->href_logo;

        $service->save();
        return redirect()->route('services.index')->with("success", "Successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('back.pages.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('back.pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Service $service, Request $request)
    {
        $validated = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'href_link' => 'required',
			'href_text' => 'required',
            'href_logo' => 'required'
		]);

        $service->title = $request->title;
        $service->description = $request->description;
        $service->href_link = $request->href_link;
        $service->href_text = $request->href_text;
        $service->href_logo = $request->href_logo;

        $service->save();
        return redirect()->route('services.index')->with("update", "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index', compact('service'))->with("delete", "Successfully Deleted");
    }
}
