<?php

namespace App\Http\Controllers;
Use Excel;
use App\Holiday;
use App\HolidayUpload;
use App\Imports\HolidaysImport;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    //
    public function adminShowHolidays()
    {
        $holidays = Holiday::where('status', '0')->paginate(10);
        return view('admin.holiday-listings',compact('holidays'));
    }

    public function adminProcessEditHoliday(Request $request)
    {
        $edit = Holiday::findOrFail($request->holidayID);

        if (isset($request->update)) {
            $edit->occassion = $request->name;
            $edit->date_from = $request->fromDate;
            $edit->date_to = $request->toDate;
        }elseif (isset($request->delete)){
            $edit->status = '1';
        }

        $edit->save();

        if (isset($request->update)) {
            \Session::flash('success', 'Holiday updated successfully!');
        }elseif (isset($request->delete)){
            \Session::flash('success', 'Holiday deleted successfully!');
        }
        return redirect()->back();
    }

    public function adminAddHoliday()
    {
        return view('admin.add-holiday');
    }

    public function adminProcessHoliday(Request $request)
    {

        if (isset($request->single)) {
            
            if (!isset($request->name) OR empty(trim($request->name))) {
                \Session::flash('error', 'Holiday must have a name');
                return redirect()->back();
            }else{
                $holiday = new Holiday();
                $holiday->occasion = $request->name;
                $holiday->date_from = $request->fromDate;
                $holiday->date_to = $request->toDate;
                $holiday->save();

                \Session::flash('success', 'Holiday successfully added!');
                return redirect()->back();
            }
            
        }elseif(isset($request->upload)){
            try
            {
              if(Input::hasFile('uploadFile'))
              {
                $file = $request->file('uploadFile');
                $allowedext = ["xlsx", "xls"];
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
      
      
                if(in_array($extension, $allowedext))
                {
      
                //   //move this file to storage path
                $file->move("holidays/", $filename);

                    $holiday = new HolidayUpload();
                    $holiday->name = $filename;
                    $holiday->description = 'Holiday file upload by '. \Auth::user()->name;
                    $holiday->date = date_format(date_create($request->date), 'Y-m-d');
                    $holiday->save();
      
                } else
                {
                  \Session::flash('error', 'Please upload only excel files with xls or xlsx extension');
                  return redirect()->back();
                }
              
                
                Excel::import(new HolidaysImport, "../public/holidays/$filename");

                \Session::flash('success', 'Holidays successfully added!');
                return redirect()->back();
              }else{
                \Session::flash('error', 'Please select a file to upload');
                return redirect()->back();
              }
            }
            catch(\Exception $e)
            {
                \Log::info($e->getMessage());
                \Log::info($e->getLine());
                \Session::flash('error', $e->getMessage());
                return redirect()->back();
            }
        }
    }
}
