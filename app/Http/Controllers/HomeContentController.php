<?php

namespace App\Http\Controllers;

use App\HomeContent;
use Illuminate\Http\Request;

class HomeContentController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeContent $home_content)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function show(HomeContent $homeContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeContent $homeContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeContent $homeContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeContent $homeContent)
    {
        //
    }
}
