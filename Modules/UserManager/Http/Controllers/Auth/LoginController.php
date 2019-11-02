<?php

namespace Modules\UserManager\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Http\Request;
use Cookie;
use App\Http\Controllers\AppBaseController;
class LoginController extends AppBaseController
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
    protected $redirectTo          = '/user/myaccount';
    protected $redirectAfterLogout = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
       // $this->middleware('auth:web')->except('logout');
    }

    /**
     * customize the login form.
     *
     * @return mix
     */
    public function showLoginForm(Request $request){
       $user  =\Auth::guard('user')->user();
        if($user){
            return redirect('/');
        }

       // echo Hash::make('123456');die;
      //dd(Hash::check('12345678', '$2y$10$Tp.7yNA9uHYTlL87lBzfS.HYKW6AQFqB7h4muYTeFIGzMBRwaBGo2'));
        $authremem = [];
        if ($request->cookie('authremem')) {
            $authremem = json_decode($request->cookie('authremem'), true);
        }
        return view('usermanager::user.login',compact('authremem'));
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request) {
        $this->validateLogin($request);
       
        if ($this->hasTooManyLoginAttempts($request)) {

            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        if ($this->attemptLogin($request)) {
            if ($request->input('remember')) {
                $cookinput = $request->only(['email', 'password', 'remember']);
                Cookie::queue('authremem', json_encode($cookinput));
            } else {
                Cookie::queue(Cookie::forget('authremem'));
            }
         
            return $this->sendLoginResponse($request);
        }
        $this->incrementLoginAttempts($request);
        /* custom cases goes here */

        /* end custom cases */
        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request) {
        $credentials = $request->only($this->username(), 'password');
      //  $credentials['status'] = 1;
      //  $credentials['is_verified'] = 1;
        return $credentials;
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $field
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request, $trans = 'auth.failed') {
        $errors = [$this->username() => trans($trans)];
        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        return redirect()->back()
                        ->withInput($request->only($this->username(), 'remember'))
                        ->withErrors($errors);
    }

    /**
     * customize the guard.
     *
     * @return object
     */
    protected function guard() {
        return Auth::guard('user');
    }

    /**
     * customize the username.
     *
     * @return string
     */
    public function username() {
        return 'email';
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->is_verified !== 1) {
            $this->guard()->logout($request);
            return redirect(route('login'))->withErrors(['common' => "Your account not verified please check your email and verify them."]);
        }
        if ($user->status !== 1) {
            $this->guard()->logout($request);
            return redirect(route('login'))->withErrors(['common' => "Your account has been disabled.please contact with website admin."]);
        }
    }

    /**
     * Remove user from session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request) {
        //https://laracasts.com/discuss/channels/laravel/the-page-has-expired-due-to-inactivity-when-logout
        $this->guard()->logout($request);
       
        return redirect()
                        ->route('login')
                        ->with(['alert_type' => 'success', 'alert_message' => __('auth.logged_out')]);
    }

}
