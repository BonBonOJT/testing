<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(Request $request) {
        $incomingFields = $request->validate([
            'Username'=> ['required'],
            'Password'=> ['required', 'min:8', 'max:200'],
        ]);
        return 'hello';
    }
}
