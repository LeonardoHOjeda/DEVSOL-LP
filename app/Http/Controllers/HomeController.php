<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
            'phone' => 'numeric|min:10',
        ]);

        // TODO: Enviar un correo a contacto@devsolutions.mx
        Mail::to('leoprogramador20@gmail.com')
          ->send(new ContactanosMailable($request->all()));

        return redirect()->back()->with('status', 'Mensaje enviado correctamente');
    }
}
