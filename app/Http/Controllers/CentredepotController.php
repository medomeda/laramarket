<?php

namespace App\Http\Controllers;

use App\Models\Centredepot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CentredepotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centredepot = Centredepot::all();
        return view('centredepots.index',compact('centredepot'));
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
     * @param  \App\Centredepot  $centredepot
     * @return \Illuminate\Http\Response
     */
    public function show(Centredepot $centredepot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Centredepot  $centredepot
     * @return \Illuminate\Http\Response
     */
    public function edit(Centredepot $centredepot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Centredepot  $centredepot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centredepot $centredepot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Centredepot  $centredepot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centredepot $centredepot)
    {
        //
    }
}
