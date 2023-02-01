<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contactView()
    {
        $maps_api = env('MAPS_API');
        return view('contact', compact('maps_api'));
    }

    public function saveForm(Request $request)
    {
        // $this->validate($request, [
        //     'user_email' => "required|min:5",
        //     "user_name" => "required|min:2",
        //     "message_subject" => "required|min:3",
        //     "message_body" => "required|min:5"
        // ]);

        $contact = [
            "date" => date("Y-m-d"),
            "user_name" => $request->input("name"),
            "user_email" => $request->input("email"),
            "user_phone" => $request->input("phone"),
            "message_subject" => $request->input("subject"),
            "message_body" => $request->input("message"),
        ];

        DB::table('contacts')->insert([
            'date' => $contact['date'],
            'userName' => $contact['user_name'],
            'userEmail' => $contact['user_email'],
            'userPhone' => $contact['user_phone'],
            'messageSubject' => $contact['message_subject'],
            'messageBody' => $contact['message_body'],
            'archived' => 0,
        ]);

        return redirect('/contact')->with('success', 'Contact saved on DB');
    }
}
