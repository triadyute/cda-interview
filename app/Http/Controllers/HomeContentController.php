<?php

namespace App\Http\Controllers;

use App\HomeContent;
use App\Photo;
use Illuminate\Http\Request;
use App\FacebookPixel;
use App\GoogleAnalytics;

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
        //dd($request->all());
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

        if($request->facebook_pixel_id){
            //dd(request()->all());
            $facebook_pixel_id = FacebookPixel::find(1);
            $facebook_pixel_id->facebook_pixel_id = empty(request()->facebook_pixel_id) ? $facebook_pixel_id->facebook_pixel_id : request()->facebook_pixel_id;
            $facebook_pixel_id->update();
        }
        if($request->google_analytics_id){
            //dd(request()->all());
            $google_analytics_id = GoogleAnalytics::find(1);
            $google_analytics_id->google_analytics_id = empty(request()->google_analytics_id) ? $google_analytics_id->google_analytics_id : request()->google_analytics_id;
            $google_analytics_id->update();
        }
        if($request->meta_noindex){
                return $request->meta_noindex;
                $homepage_content = HomeContent::find(1);
                $homepage_content->meta_noindex = request()->meta_noindex;
                $homepage_content->save();
                return response()->json($homepage_content);
        }

        //dd($request->all());
        $detail=$request->message;
		$dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $detail = $dom->savehtml();
        //return $detail;
        $home_content->title = empty(request()->title) ? $home_content->title : request()->title;
        $home_content->body = empty(request()->message) ? $home_content->body : $detail;
        $home_content->meta_title = empty(request()->meta_title) ? $home_content->meta_title : request()->meta_title;
        $home_content->meta_description = empty(request()->meta_description) ? $home_content->meta_description : request()->meta_description;
        $home_content->update();
        
        return redirect()->back()->with('status', 'Content udpated'); 
    }

}
