<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Facades\Socialite;


class SocialiteController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider){
        $socialite_user = Socialite::driver($provider)->user();
        
        $check = User::where('socialite_id', $socialite_user->id)->first();
        $check_email = User::where('email', $socialite_user->email)->first();
        
        if($check){
            Auth::login($check);
            return redirect('dashboard')->with('success', 'Sign In Successfull! ');
        }
        else{
            if($check_email){
                return redirect('login')->with('warning', 'Try another Email to Sign In !!');
            }
            $user = new User();
            $user->socialite = $provider;
            $user->socialite_id = $socialite_user->id;
            $user->socialite_token = $socialite_user->token;
            $user->name = $socialite_user->name;
            $user->email = $socialite_user->email;
            $user->save();
            Auth::login($user);
            return redirect('dashboard')->with('success', 'Sign In Successfull! ');
        }

    }
}
