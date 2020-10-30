<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function correo(Request $request){
        //return $request->all();

        $validatedData = $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'asunto' => 'required',
            'mensaje' => 'nullable',
        ]);

        Mail::to('jobs@developersjobs.com')->send(new MessageReceived($validatedData));

        return redirect()->back();
    }
}
