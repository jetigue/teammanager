<?php

namespace App\Http\Controllers;

use App\Models\TrackEvent;
use Illuminate\Http\Request;

class TrackEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackEvents = TrackEvent::all();

        return view('track.events.index', compact('trackEvents'));
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
     * @param  \App\Models\TrackEvent  $trackEvent
     * @return \Illuminate\Http\Response
     */
    public function show(TrackEvent $trackEvent, $id)
    {
        $trackEvent = TrackEvent::find($id);

        // return $trackEvent;

        return view('track.events.show', compact('trackEvent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackEvent  $trackEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackEvent $trackEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackEvent  $trackEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackEvent $trackEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackEvent  $trackEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackEvent $trackEvent)
    {
        //
    }
}
