<?php

namespace App\Http\Controllers;

use App\Models\rfs;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function history()
    {
        return view('user.history', [
            'title' => "History"
        ]);
    }
    
    public function vision()
    {
        return view('user.vision', [
            'title' => "Vision & Mission"
        ]);
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
     * @param  \App\Models\rfs  $rfs
     * @return \Illuminate\Http\Response
     */
    public function show(rfs $rfs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rfs  $rfs
     * @return \Illuminate\Http\Response
     */
    public function edit(rfs $rfs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rfs  $rfs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rfs $rfs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rfs  $rfs
     * @return \Illuminate\Http\Response
     */
    public function destroy(rfs $rfs)
    {
        //
    }
}
