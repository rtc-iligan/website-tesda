<?php

namespace App\Http\Controllers;
use App\Models\{Schedule, Accredited};
use Illuminate\Http\Request;
use DB;

class ScheduleController extends Controller
{

    public function index()
    {
         $acc=Accredited::get();
        $schedule=Schedule::join('accrediteds','accrediteds.id','schedules.acc_id')
                     ->select('accrediteds.id','accrediteds.title','schedules.date','schedules.applicant','schedules.competent','schedules.acc_id')
                     ->paginate(10);

       // $schedule=Schedule::paginate(10);


        return view('backend.assessment.schedule.index',compact('schedule','acc'));
       
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'applicant' => 'required',
            'competent' => 'required',
            'acc_id' => 'required',
           
        ]);

        $schedule=new Schedule();
        $schedule->acc_id=$request->acc_id;
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

    public function edit()
    {
        $schedule=Schedule::join('accrediteds','accrediteds.id','schedules.acc_id')
        ->select('accrediteds.id','accrediteds.title','schedules.date','schedules.applicant','schedules.competent','schedules.acc_id')
        ->first();

        return view('backend.assessment.schedule._update',compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $schedule->acc_id=$request->acc_id;
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
