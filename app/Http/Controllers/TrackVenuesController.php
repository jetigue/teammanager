<?php

namespace App\Http\Controllers;

use App\Models\TrackVenue;
use Illuminate\Http\Request;

class TrackVenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackVenues = TrackVenue::all();

        return view('track.venues.index', compact('trackVenues'));
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
     * @param  \App\Models\TrackVenue  $trackVenue
     * @return \Illuminate\Http\Response
     */
    public function show(TrackVenue $trackVenue, $id)
    {
        $trackVenue = TrackVenue::find($id);

        return view('track.venues.show', compact('trackVenue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackVenue  $trackVenue
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackVenue $trackVenue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackVenue  $trackVenue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackVenue $trackVenue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackVenue  $trackVenue
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackVenue $trackVenue)
    {
        //
    }
}
