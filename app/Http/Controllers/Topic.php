<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Topic extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topic = \App\Models\Topic::all();
        return response()->json($topic);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $topic = new \App\Models\Topic();
       $topic->fill($request->all());
       $topic->save();
       
        return redirect()->isSuccessful();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topic = \App\Models\Topic::find($id);
        return response()->json($topic);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        \App\Models\Topic::update($request->all());
        return redirect()->isSuccessful();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        \App\Models\Topic::find($id)->foreceDelete();
        return redirect()->isSuccessful();
    }
}
