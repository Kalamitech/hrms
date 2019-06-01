<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Employee;
use App\AccessLevel;
use App\Role;
use App\Department;
use App\Promotion;
use App\Count;
use Spatie\Activitylog\Contracts\Activity;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    public function adminAddEmployee()
    {
        $roles = Role::where('status', '0')
                    ->orderBy('name')
                    ->pluck('name', 'id')
                    ->all();

        $departments = Department::where('status', '0')
                        ->orderBy('name')
                        ->pluck('name', 'id')
                        ->all();

        $accessLevels = AccessLevel::orderBy('id')
                        ->pluck('description', 'id')
                        ->all();

        return view('admin.add-employee')->with(compact('roles', 'departments', 'accessLevels'));
    }

    public function processEmployee(Request $request)
    {
        
        //generate employee code
        $counts         = Count::find(1);
        $employeeCode   = "KHRMS".str_pad($counts->employees, 5, '0', STR_PAD_LEFT);
        


        //processing the photo
        $filename = public_path("photos/$employeeCode");
        if ($request->file('photo')) {
            $file             = $request->file('photo');
            $fileExt          = $file->getClientOriginalExtension();
            $allowedExtension = ['jpg', 'jpeg', 'png'];
            $destinationPath  = public_path('photos');
            if (!in_array($fileExt, $allowedExtension)) {
                return redirect()->back()->with('message', 'Extension not allowed');
            }
            $filename = $filename . '.' . $fileExt;
            $file->move($destinationPath, $filename);
        }

        /* Creating and saving user details */
        $user           = new User;
        $user->name     = $request->employeeName;
        $user->access_level     = $request->employeeAccessLevel;
        $user->email    = str_replace(' ', '-', strtolower(trim($request->employeeName))) . '@khrms.com';
        $user->password = bcrypt('123456');
        $user->save();

        /* Processing and saving other employee details */
        $employee                       = new Employee;

        //personal details
        $employee->photo                = $filename;
        $employee->name                 = $request->employeeName;
        $employee->status               = $request->employeeStatus;
        $employee->gender               = $request->employeeGender;
        $employee->date_of_birth        = date_format(date_create($request->employeeDOB), 'Y-m-d');
        $employee->number               = $request->employeePhoneNumber;
        $employee->emergency_number     = $request->employeeEmergencyNumber;
        $employee->father_name          = $request->employeeFathersName;
        $employee->current_address      = $request->employeeCurrentAddress;
        $employee->permanent_address    = $request->employeeResidentialAddress;

        //employment details
        $employee->code                 = $employeeCode;
        $employee->tin                  = $request->employeeTIN;
        $employee->role_id              = $request->employeeRole;
        $employee->department_id        = $request->employeeDepartment;
        $employee->status               = $request->employmentStatus;
        $employee->offer_acceptance     = $request->offerAcceptance;
        $employee->probation_period     = $request->employeePP;
        $employee->salary               = $request->employeeSOC;
        $employee->date_of_joining      = date_format(date_create($request->employeeDOJ), 'Y-m-d');
        $employee->date_of_confirmation = date_format(date_create($request->employeeDOC), 'Y-m-d');

        //banking details
        $employee->account_number       = $request->employeeBankAccountNumber;
        $employee->bank_name            = $request->employeeBankName;

        //ex-employment details
        $employee->date_of_resignation  = date_format(date_create($request->employeeDOR), 'Y-m-d');
        $employee->notice_period        = $request->employeeNP;
        $employee->last_working_day     = date_format(date_create($request->employeeLWD), 'Y-m-d');
        $employee->full_final           = $request->FnF;
        

        
        /* Saving Employee User Details */
        $employee->user_id              = $user->id;
        if($employee->save()){
            //update count
            $counts->employees++;
            $counts->save();

            //return success message
            \Session::flash('success', $request->employeeName.'\'s details added successfully.');
            return redirect('admin/employee-listings');
        }
    }

    public function adminShowEmployees()
    {
        $employees = Employee::paginate(15);
        return view('admin.show-employees', compact('employees'));
    }

    public function adminShowBankDetails()
    {
        $employees = Employee::paginate(15);
        return view('admin.show-bank-details', compact('employees'));
    }

    public function adminUpdateBankDetail(Request $request)
    {
        try {
            $employee                    = Employee::where('id', $request->employeeID)->first();
            $employee->bank_name         = $request->employeeBankName;
            $employee->account_number    = $request->employeeAccountNumber;
            $employee->tin = $request->employeeTIN;
            $employee->save();

        
            \Session::flash('success', $request->employeeName.'\'s bank details updated successfully.');
            return redirect('admin/employee-bank-details');

        } catch (\Exception $e) {
            \Log::info($e->getMessage() . ' on ' . $e->getLine() . ' in ' . $e->getFile());
            return json_encode('failed');
        }

    }

    public function adminShowEdit($id)
    {
        $employee = Employee::where('id', $id)->first();
        $user = Employee::where('id', $employee->user_id)->first();

        $roles = Role::where('status', '0')
                    ->orderBy('name')
                    ->pluck('name', 'id')
                    ->all();

        $departments = Department::where('status', '0')
                        ->orderBy('name')
                        ->pluck('name', 'id')
                        ->all();

        $accessLevels = AccessLevel::orderBy('id')
                        ->pluck('description', 'id')
                        ->all();

    

        return view('admin.add-employee', compact('employee', 'roles', 'departments', 'accessLevels', 'user'));
    }

    public function adminDoEdit(Request $request, $id)
    {
        

        //$edit = Employee::findOrFail($id);
        $editEmployee = Employee::where('id', $id)->first();
        $employeeCode = $editEmployee->code;
        $filename = public_path("photos/$employeeCode");
        if ($request->file('photo')) {
            $file             = $request->file('photo');
            $fileExt          = $file->getClientOriginalExtension();
            $allowedExtension = ['jpg', 'jpeg', 'png'];
            $destinationPath  = public_path('photos');
            if (!in_array($fileExt, $allowedExtension)) {
                return redirect()->back()->with('message', 'Extension not allowed');
            }
            $filename = $filename . '.' . $fileExt;
            $file->move($destinationPath, $filename);
        }

        //personal details
        if ($request->file('photo')) {
            $editEmployee->photo = $filename;
        }
        if (!empty($request->employeeName)) {
            $editEmployee->name = $request->employeeName;;
        }
        if (!empty($request->employeeStatus)) {
            $editEmployee->status = $request->employeeStatus;;
        }
        if (!empty($request->employeeGender)) {
            $editEmployee->gender = $request->employeeGender;
        }
        if (!empty($request->employeeDOB)) {
            $editEmployee->date_of_birth = $request->employeeDOB;
        }
        if (!empty($request->employeePhoneNumber)) {
            $editEmployee->number = $request->employeePhoneNumber;
        }
        if (!empty($request->employeeEmergencyNumber)) {
            $editEmployee->emergency_number = $request->employeeEmergencyNumber;
        }
        if (!empty($request->employeeFathersName)) {
            $editEmployee->father_name = $request->employeeFathersName;
        }
        if (!empty($request->employeeCurrentAddress)) {
            $editEmployee->current_address = $request->employeeCurrentAddress;
        }
        if (!empty($request->employeeResidentialAddress)) {
            $editEmployee->permanent_address = $request->employeeResidentialAddress;
        }

        //employment details
        if (!empty($request->employeeTIN)) {
            $editEmployee->tin = $request->employeeTIN;
        }
        if (!empty($request->employeeRole)) {
            $editEmployee->role_id = $request->employeeRole;
        }
        if (!empty($request->employeeDepartment)) {
            $editEmployee->department_id = $request->employeeDepartment;
        }
        if (!empty($request->employmentStatus)) {
            $editEmployee->status = $request->employmentStatus;
            if ($editEmployee->status == 1) {
                
                //update user details
                $editUser = User::where('id', $editEmployee->user_id)->first();
                $editUser->status = 1;
                $editUser->save();

            }
        }
        if (!empty($request->offerAcceptance)) {
            $editEmployee->offer_acceptance = $request->offerAcceptance;
        }
        if (!empty($request->employeePP)) {
            $editEmployee->probation_period = $request->employeePP;
        }
        if (!empty($request->employeeSOC)) {
            $editEmployee->salary = $request->employeeSOC;
        }
        if (!empty($request->employeeDOJ)) {
            $editEmployee->date_of_joining = $request->employeeDOJ;
        }
        if (!empty($request->employeeDOC)) {
            $editEmployee->date_of_confirmation = $request->employeeDOC;
        }

        //banking details
        if (!empty($request->employeeBankAccountNumber)) {
            $editEmployee->account_number = $request->employeeBankAccountNumber;
        }
        if (!empty($request->employeeBankName)) {
            $editEmployee->bank_name = $request->employeeBankName;
        }

        //ex-employment details
        if (!empty($request->employeeDOR)) {
            $editEmployee->date_of_resignation = $request->employeeDOR;
        }
        if (!empty($request->employeeNP)) {
            $editEmployee->notice_period = $request->employeeNP;
        }
        if (!empty($request->employeeLWD)) {
            $editEmployee->last_working_day = $request->employeeLWD;
        }
        if (!empty($request->FnF)) {
            $editEmployee->full_final = $request->FnF;
        }

        /* Saving Employee Details */
        $editEmployee->save();

        //return success message
        \Session::flash('success', $request->employeeName.'\'s details updated successfully.');
        return redirect('admin/employee-listings');
    }

    public function doPromotion()
    {
        $employees  = Employee::get();
        $roles = Role::where('status', '0')
                    ->orderBy('name')
                    ->pluck('name', 'id')
                    ->all();
        return view('admin.promote', compact('employees', 'roles'));
    }

    // public function getPromotionData(Request $request)
    // {
    //     $result = Employee::with('userrole.role')->where('id', $request->employee_id)->first();
    //     if ($result) {
    //         $result = ['salary' => $result->salary, 'designation' => $result->userrole->role->name];
    //     }
    //     return json_encode(['status' => 'success', 'data' => $result]);
    // }

    public function processPromotion(Request $request)
    {

        $process         = Employee::where('id', $request->employee)->first();
        $process->salary = $request->newSalary;
        $process->role_id = $request->newDesignation;
        $process->save();


        $promotion                    = new Promotion();
        $promotion->emp_id            = $request->employee;
        $promotion->old_designation   = $request->oldDesignation;
        $promotion->new_designation   = $request->newDesignationText;
        $promotion->old_salary        = $request->oldSalary;
        $promotion->new_salary        = $request->newSalary;
        // $promotion->date_of_promotion = date_format(date_create($request->date_of_promotion), 'Y-m-d');
        $promotion->date_of_promotion = date('Y-m-d');
        $promotion->save();

        \Session::flash('success', 'Employee successfully Promoted!');
        return redirect()->back();
    }

    public function adminShowPromotions()
    {
        $promotions = Promotion::paginate(10);
        return view('admin.show-promotions', compact('promotions'));
    }

}
