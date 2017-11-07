<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/galleries';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Authenticate $request){
        $credentials = $request->only(['email','password']);
        try {
            $token = \JWTAuth::attempt($credentials);
            
            if(!$token){
                return response()->json(['error'=>'invalid_credentials'],401);
            }
        } catch (Exception $e) {
            return response()->json(['error'=>'could_not_create_token'],500);
        }
        \JWTAuth::setToken($token);
        $user = \JWTAuth::toUser($token);
        return response()->json(compact('token','user'));
    }
}
