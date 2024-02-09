<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Lang;
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
    use ThrottlesLogins;
    use AuthenticatesUsers;

    /**
     * Lock user for 5 minutes after 3 wrong attempts
     * 
     */
    protected $maxAttempts = 3;
    protected $decayMinutes = 5;
 
     // ...
 
    protected function sendLockoutResponse(Request $request)
    {
         $seconds = $this->limiter()->availableIn(
             $this->throttleKey($request)
         );
 
         return redirect()->route('login')->with([
             'loginStatus' => 'locked',
             'seconds' => $seconds,
         ]);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated(){
        \Auth::logoutOtherDevices(request('password'));
    }
}
