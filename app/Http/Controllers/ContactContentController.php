<?php

namespace App\Http\Controllers;

use App\ContactContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;
use App\User;
use App\Photo;
use App\FacebookPixel;
use App\GoogleAnalytics;
use App\Notifications\EmailReceived;
class ContactContentController extends Controller
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
    public function sendMail(Request $request)
    {
        $email = array('name' => $request->name, 'email' => $request->email, 'message' => $request->message);
        $email_message = (object) $email;
        $contact = ContactContent::find(1);
        Notification::route('mail', $contact->cda_email)->notify(new EmailReceived($email_message));
        return redirect()->back()->with('status', 'Thanks for contacting us!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactContent  $contactContent
     * @return \Illuminate\Http\Response
     */
    public function show(ContactContent $contactContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactContent  $contactContent
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $contact_content = ContactContent::find(1);
        $facebook_pixel_id = FacebookPixel::find(1);
        $google_analytics_id = GoogleAnalytics::find(1);
        return view('contact.edit', compact('contact_content', 'facebook_pixel_id', 'google_analytics_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactContent  $contactContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactContent $contact_content)
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
            $photo = Photo::find(2);
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
            $google_analytics_id =GoogleAnalytics::find(1);
            $google_analytics_id->google_analytics_id = empty(request()->google_analytics_id) ? $google_analytics_id->google_analytics_id : request()->google_analytics_id;
            $google_analytics_id->update();
        }

        $contact_content->title = empty(request()->title) ? $contact_content->title : request()->title;
        $contact_content->phone = empty(request()->phone) ? $contact_content->phone : request()->phone;
        $contact_content->email = empty(request()->email) ? $contact_content->email : request()->email;
        $contact_content->cda_email = empty(request()->cda_email) ? $contact_content->cda_email : request()->cda_email;
        $contact_content->update();
        return redirect()->back()->with('status', 'Content udpated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactContent  $contactContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactContent $contactContent)
    {
        //
    }
}
