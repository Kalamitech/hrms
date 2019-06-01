<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Leave;
use App\LeaveType;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class LeavesController extends Controller
{
    public function adminApplyLeave()
    {
        $leaveTypes = LeaveType::where('status', 0)
                                ->orderBy('leave_type')
                                ->pluck('leave_type', 'id')
                                ->all();
        return view('admin.apply-leave', compact('leaveTypes'));  
    }

    public function adminProcessEdit(Request $request)
    {
      $leave = Leave::findOrFail($request->leaveID);

      if (isset($request->delete)) {
        $leave->status = '2';
      }elseif (isset($request->update)){
        $leave->date_from = date_format(date_create($request->leaveFromDate), 'Y-m-d');
        $leave->date_to = date_format(date_create($request->leaveToDate), 'Y-m-d');
        $leave->reason = $request->leaveReason;
        $leave->days = $request->leaveDaysNumber;
        $leave->status = '0';
        $leave->leave_type_id = $request->leaveType;
      }

      $leave->save();
      if (isset($request->delete)) {
        \Session::flash('success', 'Leave application deleted successful!');
      }elseif (isset($request->update)){
        \Session::flash('success', 'Leave application updated successfully!');
      }
      return redirect()->back();
    }

    public function adminProcessResponse(Request $request)
    {
      $leave = Leave::findOrFail($request->leaveID);

      if (isset($request->approve)) {
        $leave->status = '1';
      }elseif (isset($request->reject)){
        $leave->status = '3';
      }

      $leave->remarks = $request->leaveRemarks;
      $leave->save();
      if (isset($request->approve)) {
        \Session::flash('success', 'Leave application approved successfully!');
      }elseif (isset($request->reject)){
        \Session::flash('success', 'Leave application rejected successfully!');
      }
      return redirect()->back();
    }

    public function adminProcessApply(Request $request)
    {

        $leave = new Leave;
        $leave->user_id = \Auth::user()->id;
        $leave->date_from = date_format(date_create($request->leaveDateFrom), 'Y-m-d');
        $leave->date_to = date_format(date_create($request->leaveDateTo), 'Y-m-d');
        $leave->reason = $request->leaveReason;
        $leave->days = $request->leaveDaysNumber;
        $leave->status = '0';
        $leave->leave_type_id = $request->leaveType;
        $leave->save();

        \Session::flash('success', 'Leave application successful!');
        return redirect()->back();
    }


    public function adminShowMyLeaves()
    {

      $leaves = Leave::where('user_id', \Auth::user()->id)
                      ->where('status', '<>', '2')
                      ->paginate(15);
      $leaveTypes = LeaveType::where('status', 0)
                                ->orderBy('leave_type')
                                ->pluck('leave_type', 'id')
                                ->all();
      return view('admin.my-leave-list', compact('leaves', 'leaveTypes'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminShowTotalLeaves()
    {
      $leaves = Leave::where('status', '<>', '2')->paginate(15);
      $leaveTypes = LeaveType::where('status', 0)
                                ->orderBy('leave_type')
                                ->pluck('leave_type', 'id')
                                ->all();
      return view('admin.total-leave-listings', compact('leaves', 'leaveTypes'));
    }
}
