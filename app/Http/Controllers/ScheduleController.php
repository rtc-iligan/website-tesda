<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use Illuminate\Http\Request;
use DB;

class ScheduleController extends Controller
{

    public function index()
    {
      
        $schedule=Schedule::paginate(10);
        return view('backend.schedule.index',compact('schedule'));
       
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'qualification' => 'required',
            'date' => 'required',
            'applicant' => 'required',
            'competent' => 'required',
           
        ]);

        $schedule=new Schedule();
        $schedule->qualification=$request->qualification;
        $schedule->date=$request->date;
        $schedule->applicant=$request->applicant;
        $schedule->competent=$request->competent;
        $schedule->save();

        return redirect()->back()->with('success','Successfully Posted Schedule!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Schedule $schedule)
    {
        return view('backend.schedule._update',compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $schedule->qualification=$request->qualification;
        $schedule->date=$request->date;
        $schedule->applicant=$request->applicant;
        $schedule->competent=$request->competent;
        $schedule->update();

        return redirect()->back()->with('success','Successfully Updated Schedule!');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->back()->with('success','Successfully Deleted Schedule!');
    }
}
