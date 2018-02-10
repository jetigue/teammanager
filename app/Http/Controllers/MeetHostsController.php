<?php

namespace App\Http\Controllers;

use App\Models\MeetHost;
use Illuminate\Http\Request;

class MeetHostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetHosts = MeetHost::all();

        return view('meets.hosts.index', compact('meetHosts'));
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
     * @param  \App\Models\MeetHost  $meetHost
     * @return \Illuminate\Http\Response
     */
    public function show(MeetHost $meetHost)
    {
        return view('meets.hosts.show', compact('meetHost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MeetHost  $meetHost
     * @return \Illuminate\Http\Response
     */
    public function edit(MeetHost $meetHost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MeetHost  $meetHost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeetHost $meetHost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeetHost  $meetHost
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeetHost $meetHost)
    {
        //
    }
}
