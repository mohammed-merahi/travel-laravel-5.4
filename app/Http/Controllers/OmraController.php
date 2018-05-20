<?php

namespace App\Http\Controllers;

use App\omra;
use Illuminate\Http\Request;

class OmraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omras=Omra::all();
        return view('admin.omra.index',compact('omras'));
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
     * @param  \App\omra  $omra
     * @return \Illuminate\Http\Response
     */
    public function show(omra $omra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\omra  $omra
     * @return \Illuminate\Http\Response
     */
    public function edit(omra $omra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\omra  $omra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, omra $omra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\omra  $omra
     * @return \Illuminate\Http\Response
     */
    public function destroy(omra $omra)
    {
        //
    }
}
