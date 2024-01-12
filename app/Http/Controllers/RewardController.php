<?php

namespace App\Http\Controllers;

use App\Reward;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reward = Reward::all();
        return view('admin::reward.index', compact('reward'));
    }
    public function cust()
    {
        $rewards = Reward::paginate(6); // Change 10 to the number of items per page you want

        return view('admin::reward.cust', compact('rewards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::reward.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reward = new Reward();
        $reward->title = $request->title;
        $reward->writer = $request->writer;
        $reward->editor = $request->editor;
        $reward->desk = $request->desk;
        if ($request->hasFile('cover')) {
            $fileimg = $request->file('cover');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $reward->cover = $name;
        }
        $reward->save();
        return redirect()->route('rewards.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($reward)
    {
        $reward = Reward::find($reward);
        return view('admin::reward.single', compact('reward'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reward = Reward::find($id);
        return view('admin::reward.edit', compact('reward'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reward $reward)
    {
        $reward = Reward::find($request->id);
        $reward->title = $request->title;
        $reward->writer = $request->writer;
        $reward->editor = $request->editor;
        $reward->desk = $request->desk;
        if ($request->hasFile('cover')) {
            $fileimg = $request->file('cover');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $reward->cover = $name;
        }
        $reward->save();
        return redirect()->route('rewards.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reward = Reward::find($id);
        $reward->delete();
        return redirect()->route('rewards.index');
    }
}
