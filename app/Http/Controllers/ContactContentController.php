<?php

namespace App\Http\Controllers;

use App\ContactContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;
use App\User;
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
        $user = User::find(1);
        Notification::send($user, new EmailReceived($email_message));
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
        return view('contact.edit', compact('contact_content'));
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
        $contact_content->title = empty(request()->title) ? $contact_content->title : request()->title;
        $contact_content->phone = empty(request()->phone) ? $contact_content->phone : request()->phone;
        $contact_content->email = empty(request()->email) ? $contact_content->email : request()->email;
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
