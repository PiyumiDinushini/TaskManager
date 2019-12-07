<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactdetail;

class RegistrationController extends Controller
{
    public function create()
        {
            return view('createregister');
        }

        public function contactstore(Request $request)
        {
            $Contactdetail=new Contactdetail;

            $Contactdetail->name = $request->get('name');
            $Contactdetail->email = $request->get('email');
            $Contactdetail->message = $request->get('message');

            $Contactdetail->save();

            return redirect()->back();

        }
}
 