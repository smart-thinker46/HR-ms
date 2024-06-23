<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Holiday;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class HRController extends Controller
{
    /** employee list */
    public function employeeList()
    {
        $employeeList = User::all();
        return view('HR.employee',compact('employeeList'));
    }

    /** holiday Page */
    public function holidayPage()
    {
        $holidayList = Holiday::all();
        return view('HR.holidays',compact('holidayList'));
    }

    /** save record holiday */
    public function holidaySaveRecord(Request $request)
    {
        // In your controller or route handler
        $request->validate([
            'holiday_type' => 'required|string',
            'holiday_name' => 'required|string',
            'holiday_date' => 'required|string',
        ]);

        try {
            $holiday = Holiday::UpdateOrCreate(['id'=>$request->idUpdate]);
            $holiday->holiday_type  = $request->holiday_type;
            $holiday->holiday_name  = $request->holiday_name;
            $holiday->holiday_date  = $request->holiday_date;
            $holiday->save();

            Toastr::success('Create or Update Holiday successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Add Holiday fail :)','Error');
            return redirect()->back();
        }
    }

    /** delete record */
    public function deleteRecord(Request $request) 
    {
        try {

            $holidayDelete = Holiday::findOrFail($request->id_delete);
            $holidayDelete->delete();

            Toastr::success('Delete Holiday successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Delete Holiday fail :)','Error');
            return redirect()->back();
        }
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
