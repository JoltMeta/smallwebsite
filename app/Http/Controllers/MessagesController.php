<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        
        //creating a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //save the message
        $message->save();
        //redirect 
        return redirect('/')->with('status', 'Message sent Successfully');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('message')->with('message', $messages);
    }
}