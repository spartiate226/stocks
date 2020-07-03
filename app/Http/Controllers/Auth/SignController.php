<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignController extends Controller
{
    function store(Request $request)
    {
        User::create([
            "username" =>$request->username,
            "nom" =>$request->nom,
            "prenom" =>$request->prenom,
            "role" =>$request->role,
            "password" =>Hash::make($request->password),
        ]);
        return redirect('register');
    }
}
