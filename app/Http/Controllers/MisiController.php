<?php

namespace App\Http\Controllers;

use App\Misi;
use Illuminate\Http\Request;

class MisiController extends Controller
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
    public function misicreate()
    {
        return view('admin::about.prosescreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function misistore(Request $request)
    {
        $misi = new Misi();
        $misi->title = $request->title;
        $misi->desk = $request->desk;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $misi->image = $name;
        }
        $misi->save();
        return redirect()->route('about.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Misi $misi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function misiedit($misi)
    {
        $misi = Misi::find($misi);
        return view('admin::about.misiedit', compact('misi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function misiupdate(Request $request, $misi)
    {
        $misi = Misi::find($misi);
        $misi->title = $request->title;
        $misi->desk = $request->desk;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $misi->image = $name;
        }
        $misi->save();
        return redirect()->route('about.index');
    }
    
    public function misidestroy($misi)
    {
        $misi = Misi::find($misi);
        $misi->delete();
        return redirect()->route('about.index');
    }
}
