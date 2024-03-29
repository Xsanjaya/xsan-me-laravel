<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function username()
        {
            $identity  = request()->get('identity');
            $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //        $fieldName = 'email';
            request()->merge([$fieldName => $identity]);
            return $fieldName;
        }
   
    protected function validateLogin(Request $request)
        {
    //      dd($request->all());
            $validatedData = $this->validate(
                $request,
                [
                    'identity' => 'required|string',
                    'password' => 'required|string',
                ],
                [
                    'identity.required' => 'Username or email is required',
                    'password.required' => 'Password is required',
                ]
            );
        }

    public function login(Request $request) {
        $this->validateLogin($request);
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request); //defaul gawan
            return $this->sendLockoutResponse($request);
        }
        // This section is the only change
        if ($this->guard()->validate($this->credentials($request))) {
            $user = $this->guard()->getLastAttempted();
            // Make sure the user is active
            if ($this->attemptLogin($request)) {
                // Send the normal successful login response
                return $this->sendLoginResponse($request);
            }
        }
        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

     protected function sendFailedLoginResponse(Request $request)
        {
            $request->session()->put('login_error', trans('auth.failed'));
            return view('auth.login',[
                'errors' => false,
                'messages' => "Username or Password not found"
            ]);
        }
}

