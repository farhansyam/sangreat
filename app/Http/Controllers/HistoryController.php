<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $history = History::all();
        return view('admin::about.history', compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function historycreate()
    {
        return view('admin::about.historycreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function historystore(Request $request)
    {
        $history = new History();
        $history->title = $request->title;
        $history->desk = $request->desk;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $history->image = $name;
        }
        $history->save();
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($history)
    {
        $history = History::find($history);
        return view('admin::about.historyedit', compact('history'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $history = History::find($request->id);
        $history->title = $request->title;
        $history->desk = $request->desk;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $history->image = $name;
        }
        $history->save();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($history)
    {
        $history = History::find($history);
        $history->delete();
        return redirect()->route('about.index');
    }
}
