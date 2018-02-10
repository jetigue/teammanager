<?php

namespace App\Http\Controllers;

use App\Models\TrackMeetName;
use Illuminate\Http\Request;

class TrackMeetNamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackMeetNames = TrackMeetName::latest()->get();

        return view('track.meet_names.index', compact('trackMeetNames'));
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
     * @param  \App\Models\TrackMeetName  $trackMeetName
     * @return \Illuminate\Http\Response
     */
    public function show(TrackMeetName $trackMeetName, $id)
    {
        $trackMeetName = TrackMeetName::find($id);

        // return $trackMeetName;

        return view('track.meet_names.show', compact('trackMeetName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackMeetName  $trackMeetName
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackMeetName $trackMeetName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackMeetName  $trackMeetName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackMeetName $trackMeetName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackMeetName  $trackMeetName
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackMeetName $trackMeetName)
    {
        //
    }
}
