<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientMailRequest;
use App\Mail\AdminMail;
use App\Mail\UserContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function swap($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function emailToClient(ClientMailRequest $request) {


        Mail::to($request->email)->send(new UserContactMail($request->all()));

        Mail::to('alcides@grscapital.com.mx')->send(new AdminMail($request->all()));

        return redirect( $request->url .'#email')->with('msj', '-');
    }
}
