<?php

namespace App\Http\Controllers;

use App\Aboutbaner;
use Illuminate\Http\Request;

class AboutbanerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function bannercreate()
    {
        return view('admin::about.bannercreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function bannerstore(Request $request)
    {
        $banner = new Aboutbaner();
        $banner->title = $request->title;
        if ($request->hasFile('banner')) {
            $fileimg = $request->file('banner');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $banner->banner = $name;
        }
        $banner->save();
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aboutbaner $aboutbaner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function banneredit($aboutbaner)
    {
        $banner = Aboutbaner::find($aboutbaner);
        return view('admin::about.banneredit', compact('banner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function bannerupdate(Request $request)
    {
        $banner = Aboutbaner::find($request->id);
        $banner->title = $request->title;
        if ($request->hasFile('banner')) {
            $fileimg = $request->file('banner');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $banner->banner = $name;
        }
        $banner->save();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aboutbaner $aboutbaner)
    {
        //
    }
}
