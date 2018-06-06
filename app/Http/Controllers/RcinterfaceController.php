<?php

namespace App\Http\Controllers;

use App\rcinterface;
use Illuminate\Http\Request;

class RcinterfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return "test";
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
     * @param  \App\rcinterface  $rcinterface
     * @return \Illuminate\Http\Response
     */
    public function show(rcinterface $rcinterface)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rcinterface  $rcinterface
     * @return \Illuminate\Http\Response
     */
    public function edit(rcinterface $rcinterface)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rcinterface  $rcinterface
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rcinterface $rcinterface)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rcinterface  $rcinterface
     * @return \Illuminate\Http\Response
     */
    public function destroy(rcinterface $rcinterface)
    {
        //
    }
}
