<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Hash;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    /** Show the registration page */
    public function register()
    {
        return view('auth.register');
    }

    /** Store a new user */
    public function storeUser(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            $register = new User();
            $register->name      = $request->name;
            $register->email     = $request->email;
            $register->join_date = Carbon::now()->toDayDateTimeString();
            $register->role_name = 'User Normal';
            $register->status    = 'Active';
            $register->password  = Hash::make($request->password);
            $register->save();

            flash()->success('Account created successfully :)');
            return redirect('login');
        } catch (\Exception $e) {
            \Log::error($e);
            flash()->error('Failed to create account :)');
            return redirect()->back();
        }
    }
}