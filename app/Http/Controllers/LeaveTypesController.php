<?php

namespace App\Http\Controllers;

use App\Employee;
use App\LeaveType;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LeaveTypesController extends Controller
{
    //admin functions
    public function adminAddLeaveType()
    {
        return view('admin.add-leave-type');
    }

    Public function processLeaveType(Request $request)
    {
        //LeaveType::create(['name' => $request->name, 'description' => $request->description]);
        $leaveType = new LeaveType;
        $leaveType->leave_type = $request->type;
        $leaveType->description = $request->description;
        $leaveType->save();
        \Session::flash('success', 'Leave Type successfully added!');
        return redirect()->back();

    }

    public function adminShowLeaveTypes()
    {
        $leaveTypes = LeaveType::where('status', 0)->paginate(10);
        return view('admin.show-leave-types', compact('leaveTypes'));
    }

    public function adminShowEdit($id)
    {
        $result = LeaveType::whereid($id)->first();
        return view('admin.add-leave-type', compact('result'));
    }

    public function adminDoEdit(Request $request, $id)
    {
        $leave_type = $request->leave_type;
        $description = $request->description;

        $edit = LeaveType::findOrFail($id);
        if (!empty($leave_type)) {
            $edit->leave_type = $leave_type;
        }
        if (!empty($description)) {
            $edit->description = $description;
        }
        $edit->save();
        \Session::flash('success', 'Leave Type successfully updated!');
        return redirect('admin/leave-type-listings');
    }

    public function adminDoDelete($id)
    {
        $leaveType = LeaveType::find($id);
        if ($leaveType) {
            $leaveType->status = '1';
            $leaveType->save();
            \Session::flash('success', 'Leave Type successfully deleted!');
        }
        
        return redirect('admin/leave-type-listings');
    }

    //manager functions

}
