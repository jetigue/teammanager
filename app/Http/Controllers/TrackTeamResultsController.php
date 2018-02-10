<?php

namespace App\Http\Controllers;

use App\Models\TrackTeamResult;
use Illuminate\Http\Request;

class TrackTeamResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackTeamResults = TrackTeamResult::latest()->get();

        return view('track.team_results.index', compact('trackTeamResults'));
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
     * @param  \App\Models\TrackTeamResult  $trackTeamResult
     * @return \Illuminate\Http\Response
     */
    public function show(TrackTeamResult $trackTeamResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackTeamResult  $trackTeamResult
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackTeamResult $trackTeamResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackTeamResult  $trackTeamResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackTeamResult $trackTeamResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackTeamResult  $trackTeamResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackTeamResult $trackTeamResult)
    {
        //
    }
}
