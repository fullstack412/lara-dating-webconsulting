<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Validator;

//namespace TCG\Voyager\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use TCG\Voyager\Facades\Voyager;
use App\Country;
use TCG\Voyager\Models\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    function index()
    {
        return view('login');
    }

    function register(Request $request)
    {
        $data = array();
        $data['countries'] = Country::all();

        return view('register')->with('data', $data);
    }

    function postregister(Request $request)
    {
        $data = $request->all();

        /*if (!$this->validate($request, [
            'email'     =>  'required|email',
            'password'  =>  'required|alphaNum|min:4'
        ]))
        {
            return back()->with('errors', ['Something Wrong, Please enter a valid information.']);
        }*/

        if (strlen($data['fullname']) <= 0 || strlen($data['nickname']) <= 0 || strlen($data['email']) <= 0 || strlen($data['gender']) <=0 || strlen($data['marital_status']) <=0 || strlen($data['country_id']) <=0 || strlen($data['password']) <=0 || $data['terms-and-conditions'] != 'on')
        {
            return back()->with('errors', ['Something Wrong, Please enter a valid information.']);
        }

        if ($data['password'] !== $data['password_confirmation'])
        {
            return back()->with('errors', ['Something Wrong, Please enter a valid information.']);
        }

        $usersNameCount = User::where('name', $data['nickname'])->count();
        if ($usersNameCount>0)
        {
            return back()->with('errors', ['This username is already registered']);
        }

        $usersEmailCount = User::where('email', $data['email'])->count();
        if ($usersEmailCount>0)
        {
            return back()->with('errors', ['This Email address is already registered']);
        }

        $user = new User;
        $user->fullname = $data['fullname'];
        $user->name = $data['nickname'];
        $user->email = $data['email'];
        $user->gender = $data['gender'];
        $user->marital_status = $data['marital_status'];
        $user->country_id = $data['country_id'];
        $user->password = bcrypt($data['password']);
        $user->account_type = 0;
        $user->is_robot = 0;
        $user->save();

        return redirect::to('login');
    }

    function checklogin(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            return back()->with('errors', ['Wrong Login Details']);
        }

        if (!$this->validate($request, [
            'email'     =>  'required|email',
            'password'  =>  'required|alphaNum|min:4'
        ]))
        {
            return back()->with('errors', ['Wrong Login Details']);
        }

        $credentials = $this->credentials($request);
        $credentials['status'] = 1;

        if ($this->guard()->attempt($credentials, $request->has('remember'))) {
            return redirect()->action('MembersController@index');
        }

        $this->incrementLoginAttempts($request);
        return back()->with('errors', ['Wrong Login Details']);
    }

    function logout()
    {
        Auth::logout();
        return redirect::to('login');
    }

    protected function guard()
    {
        return Auth::guard(app('VoyagerGuard'));
    }
}
