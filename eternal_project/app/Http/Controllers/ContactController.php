<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContactView(){
        return view('content.contact_page');
    }

    public function saveContact(Request $request){
        $this->validate($request,[
           'name'=>'required',
            'email'=>'required|email',
            'title'=>'required',
            'phone_number'=>'required',
            'message'=>'required'
        ]);
        $newContact = new Contact();
        $newContact->name = $request->input('name');
        $newContact->email = $request->input('email');
        $newContact->title = $request->input('title');
        $newContact->phone_number = $request->input('phone_number');
        $newContact->message = $request->input('message');
        $newContact->save();


        \Mail::send('admin.contacts_message',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'title' => $request->get('title'),
                'phone_number' => $request->get('phone_number'),
                'user_message' => $request->get('message'),
            ), function($message) use ($request)
            {
                $message->from($request->email);
                $message->to('pecentusovshik@gmail.com');
            });


        return back()->with('success','Thank for your message! It will be observed soon!');
    }





}
