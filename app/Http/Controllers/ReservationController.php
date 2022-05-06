<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'res_fname' = 'required', ok
            'res_extension' = 'required', ok
            'res_mname' = 'required', ok
            'res_lname' = 'required',  ok
            'res_barangay' = 'required', ok
            'res_city' = 'required', ok
            'res_street' = 'required', ok
            'res_province' = 'required',  ok
            'res_region' = 'required', ok
            'res_district' = 'required',  ok
            'res_email' = 'required', ok
            'res_contact' = 'required', ok
            'res_nationality' = 'required', ok
            'res_gender' = 'required',  ok
            'res_civilstat' = 'required',  ok
            'res_employstat' = 'required', ok 
            'res_namemp' = 'required', ok
            'res_addemp' = 'required', ok
            'res_datemp' = 'required',ok
            'res_salary' = 'required', ok
            'res_classworker' = 'required', ok 
            'res_qualification' = 'required', 
            'res_educational' = 'required', ok
            'res_nc' = 'required',  
            'res_birthmonth' = 'required', ok
            'res_birthday' = 'required', ok
            'res_birthyear' = 'required', ok
            'res_age' = 'required', ok
            'res_birthcity' = 'required', ok
            'res_birthprov' = 'required', ok
            'res_birthreg' = 'required', ok
            'res_parent' = 'required', ok
            'res_lts' = 'required',
            'res_ltsothers' = 'required', 
            'res_parentmailbar' = 'required', ok
            'res_parentmailcit' = 'required', ok
            'res_parentmailpro' = 'required', ok
            'registeredDate' = 'required', 
            'res_scholarship' = 'required',
            'res_parentcon' = 'required', ok
            'res_classification' = 'required', ok
        ]);
        $data = new Reservation;
        $data->fill($validated);
        $data->save();

        return redirect()->route('frontend.others.reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
