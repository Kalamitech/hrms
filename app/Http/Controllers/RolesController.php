<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //admin functions
    public function adminAddRole()
    {
        return view('admin.add-role');
    }

    Public function processRole(Request $request)
    {
        //Role::create(['name' => $request->name, 'description' => $request->description]);
        $role = new Role;
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();
        \Session::flash('flash_message', 'Role successfully added!');
        return redirect()->back();

    }

    public function adminShowRoles()
    {
        $roles = Role::where('status', 0)->paginate(10);
        return view('admin.show-roles', compact('roles'));
    }

    public function adminShowEdit($id)
    {
        $result = Role::whereid($id)->first();
        return view('admin.add-role', compact('result'));
    }

    public function adminDoEdit(Request $request, $id)
    {
        $name = $request->name;
        $description = $request->description;

        $edit = Role::findOrFail($id);
        if (!empty($name)) {
            $edit->name = $name;
        }
        if (!empty($description)) {
            $edit->description = $description;
        }
        $edit->save();
        \Session::flash('flash_message', 'Role successfully updated!');
        return redirect('admin/role-listings');
    }

    public function adminDoDelete($id)
    {
        $role = Role::find($id);
        if ($role) {
            $role->status = '1';
            $role->save();
            \Session::flash('flash_message', 'Role successfully Deleted!');
        }
        
        return redirect('admin/role-listings');
    }

    //manager functions

}

