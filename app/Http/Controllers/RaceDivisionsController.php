<?php

namespace App\Http\Controllers;

use App\Models\RaceDivision;
use Illuminate\Http\Request;

class RaceDivisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raceDivisions = RaceDivision::all();

        return view('meets.divisions.index', compact('raceDivisions'));
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
     * @param  \App\Models\RaceDivision  $raceDivision
     * @return \Illuminate\Http\Response
     */
    public function show(RaceDivision $raceDivision)
    {
        // $raceDivision = RaceDivision::find($id);


        return view('meets.divisions.show', compact('raceDivision'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RaceDivision  $raceDivision
     * @return \Illuminate\Http\Response
     */
    public function edit(RaceDivision $raceDivision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RaceDivision  $raceDivision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaceDivision $raceDivision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RaceDivision  $raceDivision
     * @return \Illuminate\Http\Response
     */
    public function destroy(RaceDivision $raceDivision)
    {
        //
    }
}
