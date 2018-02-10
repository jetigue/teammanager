<?php

namespace App\Http\Controllers;

use App\Models\TrackMeet;
use Illuminate\Http\Request;

class TrackMeetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackMeets = TrackMeet::latest()->get();

        return view('track.meets.index', compact('trackMeets'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrackMeet  $trackMeet
     * @return \Illuminate\Http\Response
     */
    public function show(TrackMeet $trackMeet, $id)
    {
        $trackMeet = TrackMeet::find($id);

        return view('track.meets.show', compact('trackMeet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackMeet  $trackMeet
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackMeet $trackMeet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackMeet  $trackMeet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackMeet $trackMeet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackMeet  $trackMeet
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackMeet $trackMeet)
    {
        //
    }
}
