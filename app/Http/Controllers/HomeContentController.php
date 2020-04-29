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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, HomeContent $home_content)
    {
        //dd($request->all());
        $home_content->title = empty(request()->title) ? $home_content->title : request()->title;
        $home_content->body = empty(request()->body) ? $home_content->body : request()->body;
        //return $home_content;
        $home_content->update();
        return redirect()->back()->with('status', 'Content udpated'); 
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
