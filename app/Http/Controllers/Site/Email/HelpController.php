<?php

namespace App\Http\Controllers\Site\Email;

use App\Http\Controllers\Controller;
use App\Mail\Contact as MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HelpController extends Controller
{
    /**
     * Show the form for sending a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'msg' => 'required|string'
         ]);


        Mail::to(config('mail.from.address'))->send(new MailContact($request->all()));
        return redirect()->back()->with('help', '1');
    }
}
