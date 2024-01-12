<?php

namespace App\Http\Controllers;

use App\Misi;
use App\About;
use App\Aboutbaner;
use App\History;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        $misis = Misi::all();
        $history = History::all();
        $banner = Aboutbaner::all();
        return view('admin::about.index', compact('about','misis','history','banner'));
    }

    public function customer()
    {
        $about = About::first();
        $misis = Misi::all();
        $history = History::all();
        $banner = Aboutbaner::first();
        return view('admin::about.cust', compact('about','misis','history','banner'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function bannercreate()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($about)
    {
        $about = About::find($about);
        return view('admin::about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $about = About::find($request->id);
        $about->deskripsi = $request->deskripsi;
        $about->map = $request->map;
        $about->visi = $request->visi;
        if ($request->hasFile('logo')) {
            $fileimg = $request->file('logo');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $about->logo = $name;
        }
        $about->save();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
