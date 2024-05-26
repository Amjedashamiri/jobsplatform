<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class ContactController extends Controller
{
   
        public function index()
        {
            return view('contact');
        }
        public function store(Request $request)
        {
            $newMessage = new Message;
            $newMessage->name = $request->name;
            $newMessage->email = $request->email;
            $newMessage->subject = $request->subject;
            $newMessage->message = $request->message;
            $newMessage->save();

    return back()->with('success', 'Your message has been sent. Thank you!');
}
/*public function show()
{
    $contactMessages = ContactMessage::all();
    return view('contactmessages-show', compact('contactMessages'));
}*/
    }
    
