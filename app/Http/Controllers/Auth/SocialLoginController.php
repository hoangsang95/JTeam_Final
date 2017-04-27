<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Carbon\Carbon;
class SocialLoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use AuthenticatesUsers;
    
    public function __construct()
    {
       $user = Auth::user();
    }
    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider) {
        
        if (Auth::check()) {
            return redirect()->intended('/');
        }
        $socialUser = Socialite::driver($provider)->user();
        $User_RegisteredDatetime = Carbon::now('Asia/Ho_Chi_Minh');
        
        $user = User::where('User_ProviderID', $socialUser->getId())->first();
        //dd($socialUser->getId());
        if (!$user)
            User::firstOrCreate([
                'User_RegisteredDatetime' =>  $User_RegisteredDatetime,
                'User_Name' => $socialUser->getName(),
                'User_Email' => $socialUser->getEmail(),
                'User_ProviderID' => $socialUser->getId(),
                'User_Provider' => $provider,
                
            ]);
        //Auth::login(Auth::user());
        Auth::login($user, true);
        return redirect()->intended('/');



       
    }

}
