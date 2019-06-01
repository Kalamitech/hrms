<?php

namespace App\Http\Controllers;

use App\TrainingInvite;
use App\TrainingProgram;
use App\Employee;
use App\User;
use Illuminate\Http\Request;

class TrainingsController extends Controller
{
    public function adminAddTraining(){
        return view('admin.add-training-program');
    }

    public function adminProcessTraining(Request $request){
       $programs = new TrainingProgram();
       $programs->name = $request->name;
       $programs->description = $request->description;
       $programs->save();

        \Session::flash('success', 'Training Program successfully added!');
        return redirect()->back();

    }

    public function adminShowPrograms(){
        $programs = TrainingProgram::where('status', '0')->paginate(10);
        return view('admin.program-listings',compact('programs'));
    }

   
    public function adminProcessEditProgram(Request $request){

        $edit = TrainingProgram::findOrFail($request->programID);

        if (isset($request->update)) {
            $name = $request->name;
            $description = $request->description;
            if (!empty($name)) {
                $edit->name = $name;
            }
            if (!empty($description)) {
                $edit->description = $description;
            }
        }elseif (isset($request->delete)){
            $edit->status = '1';
        }

        $edit->save();

        if (isset($request->update)) {
            \Session::flash('success', 'Training Program updated successfully!');
        }elseif (isset($request->delete)){
            \Session::flash('success', 'Training Program deleted successfully!');
        }
        return redirect()->back();

    }

    public function adminAddTrainingInvite(){
        $employees  = Employee::where('status', '0')->get();
        $programs= TrainingProgram::where('status', '0')->get();
        return view('admin.training-invite',compact('employees','programs'));
    }

    public function adminProcessTrainingInvite(Request $request)
    {

        
        $totalMembers = count($request->employeeIDs);
        $i = 0;
        try
        {
            foreach ($request->employeeIDs as $employeeID)
            {
                $check = TrainingInvite::where(['program_id' => $request->programID, 'user_id' => $employeeID, 'status' => 0])->first();
                if(!$check)
                {
                    $invites = new TrainingInvite();
                    $invites->user_id = $employeeID;
                    $invites->program_id = $request->programID;
                    $invites->description = $request->description;
                    $invites->date_from = date_format(date_create($request->date_from), 'Y-m-d');
                    $invites->date_to = date_format(date_create($request->date_to), 'Y-m-d');
                    $invites->save();
                    $i++;
                }
            }
        }
        catch(\Exception $e)
        {
            \Log::info($e->getMessage(). ' on '. $e->getLine(). ' in '. $e->getFile());
        }

        \Session::flash('success', $i . ' out of '. $totalMembers. ' members have been invited for the training!');
        return redirect()->back();
    }

    public function adminInvitationListing()
    {
        $invites = TrainingInvite::where('status', '0')->paginate(15);
        return view('admin.invitation-listings',compact('invites'));
    }

    public function adminProcessInvitationListing(Request $request)
    {
        $invite = TrainingInvite::where('id', $request->inviteID)->firstOrFail();
        if (isset($request->update)) {

            $invite->description = $request->description;
            $invite->date_from = $request->fromDate;
            $invite->date_to = $request->toDate;
        
        }elseif (isset($request->delete)){
            $invite->status = '1';
        }
        
        $invite->save();
        

        if (isset($request->update)) {
            \Session::flash('success', 'Training invite updated successfully!');
        }elseif (isset($request->delete)){
            \Session::flash('success', 'Training invite deleted successfully!');
        }
        return redirect()->back();
    }
}
