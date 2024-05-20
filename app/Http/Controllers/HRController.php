<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    /** employee list */
    public function employeeList()
    {
        return view('hr.employee');
    }

    /** holiday Page */
    public function holidayPage()
    {
        return view('hr.holidays');
    }

    /** leave Employee */
    public function leaveEmployee()
    {
        return view('hr.leave-employee');
    }
}
