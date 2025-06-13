<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Route;



class loginController extends Controller
{
    //
    function checkUser(Request $request){
        if($request->userEmail == 'admin' && $request->userPassword == 'admin'){
            session(['admin' => true]); 
            return redirect()->route('admindashboard');
        }
        $user = registration::where('userEmail',$request->userEmail)->first();

        if (!$user) {
            return back()->with('error', 'No account found. Please register first.');
        }

        if ($user->userPassword === $request->userPassword) {
            return view('userView', ['userData' => $user]);
        }else{
            return back()->with('error', 'Invalid credentials. Please try again.');
        }
    }


    function destroy(){
        return view('welcome');
    }
}
