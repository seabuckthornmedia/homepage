<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;

class PagesController extends Controller
{
   public function postContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:10',
            'message' => 'min: 10']);
            $data = array(
                            'email' => $request->email,
                            'subject' => $request->subject,
                            'bodyMessage' => $request->message
                        );
            Mail::send('emails.contactmail', $data, function($message) use ($data){
                $message->from('no-reply@seabuckthornmedia.com');
                $message->to('info@seabuckthornmedia.com');
                $message->subject($data['subject']);
                });
                return view('pages.index', ['msg' => 'success']);

   }

}
