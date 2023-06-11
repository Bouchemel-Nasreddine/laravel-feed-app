<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function register(Request $request)
    {
        $incomingData= $request->validate([
            'name' => 'required|min:3|max:20|alpha|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        $incomingData['password'] = bcrypt($incomingData['password']);

        User::create($incomingData);
        return "<p> register</p> ";
    }

}
