<?php

namespace App\Http\Controllers;

use App\HomeContent;
use App\Photo;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function show(HomeContent $homeContent)
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
        if($request->photo)
        {
            //dd($request->all());
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
            //return $path;
            $photo_id = $fileNameToStore;
            //return $photo_id;
            $photo = Photo::find(1);
            $photo->name = $photo_id;
            $photo->update();
        }
        //dd($request->all());
        $detail=$request->message;
		$dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $detail = $dom->savehtml();
        //return $detail;
        $home_content->title = empty(request()->title) ? $home_content->title : request()->title;
        $home_content->body = empty(request()->message) ? $home_content->body : $detail;
        $home_content->update();
        
        return redirect()->back()->with('status', 'Content udpated'); 
    }

}
