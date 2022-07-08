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
            'res_fname' = 'required', 
            'res_extension' = 'required', 
            'res_mname' = 'required', 
            'res_lname' = 'required',  
            'res_barangay' = 'required', 
            'res_city' = 'required', 
            'res_street' = 'required', 
            'res_province' = 'required',  
            'res_region' = 'required', 
            'res_district' = 'required',  
            'res_email' = 'required', 
            'res_contact' = 'required', 
            'res_nationality' = 'required', 
            'res_gender' = 'required',  
            'res_civilstat' = 'required',  
            'res_employstat' = 'required',  
            'res_namemp' = 'required', 
            'res_addemp' = 'required', 
            'res_datemp' = 'required',
            'res_salary' = 'required', 
            'res_classworker' = 'required',  
            'res_qualification' = 'required', 
            'res_educational' = 'required', 
            'res_nc' = 'required',  
            'res_birthmonth' = 'required', 
            'res_birthday' = 'required', 
            'res_birthyear' = 'required', 
            'res_age' = 'required', 
            'res_birthcity' = 'required', 
            'res_birthprov' = 'required', 
            'res_birthreg' = 'required', 
            'res_parent' = 'required', 
            'res_lts' = 'required',
            'res_ltsothers' = 'required', 
            'res_parentmailbar' = 'required', 
            'res_parentmailcit' = 'required', 
            'res_parentmailpro' = 'required', 
            'registeredDate' = 'required', 
            'res_scholarship' = 'required',
            'res_parentcon' = 'required', 
            'res_classification' = 'required', 
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
