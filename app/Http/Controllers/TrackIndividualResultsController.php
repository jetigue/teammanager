<?php

namespace App\Http\Controllers;

use App\Models\TrackIndividualResult;
use Illuminate\Http\Request;

class TrackIndividualResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackIndividualResults = TrackIndividualResult::latest()->get();

        return view('track.individual_results.index', compact('trackIndividualResults'));
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
     * @param  \App\Models\TrackIndividualResult  $trackIndividualResult
     * @return \Illuminate\Http\Response
     */
    public function show(TrackIndividualResult $trackIndividualResult, $id)
    {
        $trackIndividualResult = TrackIndividualResult::find($id);

        return view('track.individual_results.show', compact('trackIndividualResult'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackIndividualResult  $trackIndividualResult
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackIndividualResult $trackIndividualResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackIndividualResult  $trackIndividualResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackIndividualResult $trackIndividualResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackIndividResult  $trackIndividResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackIndividResult $trackIndividResult)
    {
        //
    }
}
