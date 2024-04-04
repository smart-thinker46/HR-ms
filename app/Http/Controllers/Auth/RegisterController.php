<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use DB;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /** regiter page */
    public function register()
    {
        return view('auth.register');
    }

    /** insert new users */
    public function storeUser(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        try {
            $dt        = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();
            
            $register            = new User;
            $register->name      = $request->name;
            $register->email     = $request->email;
            $register->join_date = $todayDate;
            $register->role_name = 'User Normal';
            $register->status    = 'Active';
            $register->password  = Hash::make($request->password);
            $register->save();

            Toastr::success('Create new account successfully :)','Success');
            return redirect('login');
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Add new employee fail :)','Error');
            return redirect()->back();
        }
    }

}
