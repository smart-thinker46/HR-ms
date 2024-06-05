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

    /** create Leave Employee */
    public function createLeaveEmployee()
    {
        return view('hr.create-leave-employee');
    }

    /** leave HR */
    public function leaveHR() {
        return view('hr.leave-hr');
    }

    /** attendance */
    public function attendance()
    {
        return view('hr.attendance');
    }

    /** create Leave HR */
    public function createLeaveHR()
    {
        return view('hr.create-leave-hr');
    }

    /** attendance Main */
    public function attendanceMain()
    {
        return view('hr.attendance-main');
    }

    /** department */
    public function department()
    {
        return view('hr.department');
    }

}
