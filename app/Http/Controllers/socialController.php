<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Registration;

class socialController extends Controller
{
    //
    public function redirectToGoogle(){
        // dd(config('services.google'));

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = Registration::where('userEmail', $googleUser->getEmail())->first();

        if (!$user) {
            // Register new user
            $user = new Registration();
            $user->userName = $googleUser->getName();
            $user->userEmail = $googleUser->getEmail();
            $user->provider = 'google';
            $user->provider_id = $googleUser->getId();
            if($user->save()){
                return view('userView',['userData'=>$user]);
            }else{
                echo "invalid operation";
            }
        }
        return  view('userView',['userData'=>$user]);
    }

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        $githubUser = Socialite::driver('github')->stateless()->user();

        $user = Registration::where('userEmail', $githubUser->getEmail())->first();

        if (!$user) {
            // Register new user
            $user = new Registration();
            $user->userName = $githubUser->getName();
            $user->userEmail = $githubUser->getEmail();
            $user->provider = 'github';
            $user->provider_id = $githubUser->getId();
            if($user->save()){
                return view('userView',['userData'=>$user]);
            }else{
                echo "invalid operation";
            }
        }
        return  view('userView',['userData'=>$user]);
    }
}
