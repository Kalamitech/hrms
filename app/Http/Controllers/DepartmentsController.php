<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Department;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //admin functions
    public function adminAddDepartment()
    {
        return view('admin.add-department');
    }

    Public function processDepartment(Request $request)
    {
        $department = new Department;
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();
        \Session::flash('flash_message', 'Department successfully added!');
        return redirect()->back();

    }

    public function adminShowDepartments()
    {
        $departments = Department::where('status', 0)->paginate(10);
        return view('admin.show-departments', compact('departments'));
    }

    public function adminShowEdit($id)
    {
        $result = Department::whereid($id)->first();
        return view('admin.add-department', compact('result'));
    }

    public function adminDoEdit(Request $request, $id)
    {
        $name = $request->name;
        $description = $request->description;

        $edit = Department::findOrFail($id);
        if (!empty($name)) {
            $edit->name = $name;
        }
        if (!empty($description)) {
            $edit->description = $description;
        }
        $edit->save();
        \Session::flash('flash_message', 'Department successfully updated!');
        return redirect('admin/department-listings');
    }

    public function adminDoDelete($id)
    {
        $department = Department::find($id);
        if ($department) {
            $department->status = '1';
            $department->save();
            \Session::flash('flash_message', 'Department successfully Deleted!');
        }
        
        return redirect('admin/department-listings');
    }

    //manager functions

}

