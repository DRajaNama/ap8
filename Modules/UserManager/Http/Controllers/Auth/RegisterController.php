<?php

namespace Modules\UserManager\Http\Controllers\Auth;

use Modules\UserManager\Entities\User;
use Modules\UserManager\Entities\UserAddresses;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Modules\UserManager\Entities\Role;
use Modules\UserManager\Http\Requests\UsersRequest;
use PragmaRX\Countries\Package\Countries;
use Modules\LocationManager\Entities\Location;
use Modules\LocationManager\Entities\CurrencyLocation;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
        $this->middleware('setcurrency');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'mobile' => ['required|numeric|digits_between:6,16'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create($data);
        $addresses = new UserAddresses;
        $addresses->is_default = 1;
        $addresses->address_line_1 = $data['address_line_1'] ?? NULL;
        $addresses->address_line_2 = $data['address_line_2'] ?? NULL;
        $addresses->city = $data['city'];
        $addresses->state_id = $data['state_id'];
        $addresses->location_id = $data['country_id'];
        $addresses->postal_code = $data['postal_code'];
        return $user->address()->save($addresses);
    }

     /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $user  =\Auth::guard()->user();
        if($user){
            return redirect('dashboard');
        }
        if (session()->has('current_currency')) {
            session()->forget('current_currency');
        }
        $countries = \Modules\LocationManager\Entities\Location::orderBy('title', 'asc')->countries()->with('currency')->select('id','title','iso_alpha2_code','iso_alpha3_code')->get();
        $roles = Role::orderBy('title', 'DESC')->pluck('title','id')->toArray();


        return view('usermanager::Users.auth.register', compact('roles','countries'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(UsersRequest $request)
    {
        event(new Registered($user = $this->create($request->except(['agree']))));
        //$this->guard()->login($user);
        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath())->with('success', 'We sent you an activation code. Check your email and click on the link to verify.');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('web');
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(UsersRequest $request, $user)
    {
        //
    }
}
