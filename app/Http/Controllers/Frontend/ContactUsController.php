<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = $request->all();
        $data['message'] = nl2br($data['message']);
        $contact_us = Contact::create($data);

        if ($contact_us) {
            return redirect()->back()->with('success', 'Your message has been sent successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }

    }
}
