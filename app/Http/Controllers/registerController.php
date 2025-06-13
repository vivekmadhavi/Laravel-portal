<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class registerController extends Controller
{
    //
    public function addUser(Request $request)
    {
        // Validate form input
        $request->validate([
            'userName'     => 'required|string|min:3|max:50',
            'userEmail'    => 'required|email|unique:registrations,userEmail',
            'userPassword' => 'required|min:6|max:20',
        ]);

        // Create and save user
        $newUser = new Registration;
        $newUser->userName = $request->userName;
        $newUser->userEmail = $request->userEmail;
        $newUser->userPassword = $request->userPassword;

        if ($newUser->save()) {
            return view('userView', ['userData' => $newUser]);
            }else{
            return redirect()->back()->with('error', 'Registration failed!');
        }
    }
}
