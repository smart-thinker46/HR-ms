<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /** page account profile */
    public function index()
    {
        return view('pages.account');
    }
}
