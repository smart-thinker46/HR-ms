<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use App\Models\User;
use App\Models\Holiday;
use App\Models\Department;
use App\Models\LeaveInformation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class HRController extends Controller
{
    /** employee list */
    public function employeeList()
    {
        $employeeList = User::all();
        $id = User::orderBy('id', 'DESC')->first()->user_id;
        $userId = (int)substr($id, 4) + 1;
        $employeeId = 'KH_000'.$userId;
        $roleName   = DB::table('role_type_users')->get();
        $position   = DB::table('position_types')->get();
        $department = DB::table('departments')->get();
        $statusUser = DB::table('user_types')->get();
        return view('HR.employee',compact('employeeList','employeeId','roleName','position','department','statusUser'));
    }

    /** save record employee */
    public function employeeSaveRecord(Request $request)
    {
        // In your controller or route handler
        $request->validate([
            'photo'        => 'required|image|',
            'name'         => 'required|string',
            'email'        => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|numeric',
            'location'     => 'required|string',
            'join_date'    => 'required|string',
            'experience'   => 'required|string',
            'designation'  => 'required|string',
        ]);

        try {

            $photo = $request->name.'.'.$request->photo->extension();  
            $request->photo->move(public_path('assets/images/user'), $photo);

            $register               = new User;
            $register->name         = $request->name;
            $register->email        = $request->email;
            $register->phone_number = $request->phone_number;
            $register->location     = $request->location;
            $register->join_date    = $request->join_date;
            $register->experience   = $request->experience;
            $register->designation  = $request->designation;
            $register->role_name    = 'User Normal';
            $register->status       = 'Active';
            $register->avatar       = $photo;
            $register->password     = Hash::make('Hello@123');
            $register->save();

            Toastr::success('Add new employee successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Add new employee fail :)','Error');
            return redirect()->back();
        }
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
    public function holidayDeleteRecord(Request $request) 
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
        $leaveInformation = LeaveInformation::all();
        return view('HR.LeavesManage.create-leave-employee',compact('leaveInformation'));
    }

    /** leave HR */
    public function leaveHR()
    {
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
        $leaveInformation = LeaveInformation::all();
        return view('HR.LeavesManage.create-leave-hr',compact('leaveInformation'));
    }

    /** attendance Main */
    public function attendanceMain()
    {
        return view('HR.Attendance.attendance-main');
    }

    /** department */
    public function department()
    {
        $departmentList = Department::all();
        return view('HR.department',compact('departmentList'));
    }

    /** save record department */
    public function saveRecordDepartment(Request $request)
    {
        // In your controller or route handler
        $request->validate([
            'department'   => 'required|string',
            'head_of'      => 'required|string',
            'phone_number' => 'required|integer',
            'email'        => 'required|email',
            'total_employee' => 'required|integer',
        ]);

        try {
            $department = Department::UpdateOrCreate(['id'=>$request->id_update]);
            $department->department      = $request->department;
            $department->head_of         = $request->head_of;
            $department->phone_number    = $request->phone_number;
            $department->email           = $request->email;
            $department->total_employee  = $request->total_employee;
            $department->save();

            Toastr::success('Create or Update Department successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Add Department fail :)','Error');
            return redirect()->back();
        }
    }

    /** delete record department */
    public function deleteRecordDepartment(Request $request)
    {
        try {

            $delete = Department::findOrFail($request->id_delete);
            $delete->delete();

            Toastr::success('Delete record successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Delete record fail :)','Error');
            return redirect()->back();
        }
    }

}
