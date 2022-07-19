<?php

namespace App\Http\Controllers;

use App\Models\Accredited;
use Illuminate\Http\Request;

class AccreditedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acc = Accredited::paginate(25);
        return view('backend.assessment.accredited.index',compact('acc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title'=> 'required',
            'acc_number' => 'required',
            'acc_date' => 'required',
            'acc_exp'  => 'required', 
            'fee'  => 'required',
        ]);

        $acc=new Accredited();
        $acc->title=$request->title;
        $acc->acc_number=$request->acc_number;
        $acc->acc_date=$request->acc_date;
        $acc->acc_exp=$request->acc_exp;
        $acc->fee=$request->fee;
        $acc->save();
        return redirect()->back()->with('success','Successfully Posted Accredited Qualification!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accredited  $accredited
     * @return \Illuminate\Http\Response
     */
    public function show(Accredited $accredited)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accredited  $accredited
     * @return \Illuminate\Http\Response
     */
    public function edit(Accredited $accredited)
    {
        return view('backend.assessment.accredited._update',compact('accredited'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accredited  $accredited
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accredited $accredited)
    {
        $accredited->title=$request->title;
        $accredited->acc_number=$request->acc_number;
        $accredited->acc_date=$request->acc_date;
        $accredited->acc_exp=$request->acc_exp;
        $accredited->fee=$request->fee;
        $accredited->update();

        return redirect()->back()->with('success','Successfully Updated Accredired Qualification!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accredited  $accredited
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accredited $accredited)
    {
        $accredited->delete();
        return redirect()->back()->with('success','Successfully Deleted Accredired Qualification!');
    }
}
