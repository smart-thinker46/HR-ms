<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    /** employee list */
    public function employeeList()
    {
        return view('HR.employee');
    }

    /** holiday Page */
    public function holidayPage()
    {
        return view('HR.holidays');
    }

    /** leave Employee */
    public function leaveEmployee()
    {
        return view('HR.LeavesManage.leave-employee');
    }

    /** create Leave Employee */
    public function createLeaveEmployee()
    {
        return view('HR.LeavesManage.create-leave-employee');
    }

    /** leave HR */
    public function leaveHR() {
        return view('HR.LeavesManage.leave-hr');
    }

    /** attendance */
    public function attendance()
    {
        return view('HR.Attendance.attendance');
    }

    /** create Leave HR */
    public function createLeaveHR()
    {
        return view('HR.LeavesManage.create-leave-hr');
    }

    /** attendance Main */
    public function attendanceMain()
    {
        return view('HR.Attendance.attendance-main');
    }

    /** department */
    public function department()
    {
        return view('HR.department');
    }

}
