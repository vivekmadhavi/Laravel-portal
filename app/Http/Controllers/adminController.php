<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class adminController extends Controller
{
    //

    function userData(Request $request){
        $user = Registration::all();
        return view('adminDashboard',['userData'=>$user]);
    }


    function userDelete($id){
        $user = Registration::destroy($id);
        if($user){
            return redirect()->route('admindashboard');
        }else{
            echo "invalid operation";
        }
    }
    
    function userDetail($id){
        $user = Registration::find($id);
        return view('update',['userDetail'=>$user]);
    }

    function userUpdate(Request $request){
        $user = Registration::find($request->id);
        $user->userName = $request->name;
        $user->userEmail = $request->email;
        $user->userPassword = $request->password;
        if($user->save()){
            return redirect()->route('admindashboard');
        }else{
            echo "operation  fail";
        }
    }

    function deleteall(Request $request){
        print_r($request->ids);
        $isdelete = Registration::whereIn('id',$request->ids)->delete();
        if ($isdelete) {
        return redirect('admindashboard')->with('success', 'Selected users deleted successfully.');
        } else {
        return redirect('admindashboard')->with('error', 'Failed to delete selected users.');
        }
    }

}
