<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::paginate(5);
        return view('backend.reservation.index',compact('reservation'));
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
    public function addReservation(Request $request)
    {
        $data = array();
        $data['res_fname'] = $request->res_fname;
        $data['res_extension'] = $request->res_extension;
        $data['res_mname'] = $request->res_mname;
        $data['res_lname'] = $request->res_lname;
        $data['res_barangay'] = $request->res_barangay;
        $data['res_city'] = $request->res_city;
        $data['res_street'] = $request->res_street;
        $data['res_province'] = $request->res_province;
        $data['res_region'] = $request->res_region;
        $data['res_district'] = $request->res_district;
        $data['res_email'] = $request->res_email;
        $data['res_contact'] = $request->res_contact;
        $data['res_nationality'] = 'Filipino';
        $data['res_gender'] = $request->res_gender;
        $data['res_civilstat'] = $request->res_civilstat;
        $data['res_employstat'] = $request->res_employstat;
        $data['res_namemp'] = $request->res_namemp;
        $data['res_addemp'] = $request->res_addemp;
        $data['res_datemp'] = $request->res_datemp;
        $data['res_salary'] = $request->res_salary;
        $data['res_classworker'] = $request->res_classworker;
        $data['res_qualification'] = $request->res_qualification;
        $data['res_educational'] = $request->res_educational;
        $data['res_nc'] = $request->res_nc;
        $data['res_birthmonth'] = $request->res_birthmonth;
        $data['res_birthday'] = $request->res_birthday;
        $data['res_birthyear'] = $request->res_birthyear;
        $data['res_age'] = $request->res_age;
        $data['res_birthcity'] = $request->res_birthcity;
        $data['res_birthprov'] = $request->res_birthprov;
        $data['res_birthreg'] = $request->res_birthreg;
        $data['res_parent'] = $request->res_parent;
        $data['res_lts'] = $request->res_lts;
        $data['res_ltsothers'] = $request->res_ltsothers;
        $data['res_parentmailbar'] = $request->res_parentmailbar;
        $data['res_parentmailcit'] = $request->res_parentmailcit;
        $data['res_parentmailpro'] = $request->res_parentmailpro;
        $data['registeredDate'] = $request->registeredDate;
        $data['res_scholarship'] = $request->res_scholarship;
        $data['res_parentcon'] = $request->res_parentcon;
        DB::table('reservations')->insert($data);
        Session::put('exception', 'Well Done!');
        return Redirect::to('/reservations')->with('success','\nPlease note that all application are subject for validation and in limited slots only. Thank you for visiting our webpage and GOD bless.');
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
    public function edit($res_id)
    {   
        $rese = Reservation::find($res_id);
        return view('backend.reservation._update',compact('rese'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $res_id)
    {
        $data = array();
        $data['res_fname'] = $request->res_fname;
        $data['res_mname'] = $request->res_mname;
        $data['res_lname'] = $request->res_lname;
        $data['res_extension'] = $request->res_extension;
        $data['res_barangay'] = $request->res_barangay;
        $data['res_city'] = $request->res_city;
        $data['res_street'] = $request->res_street;
        $data['res_province'] = $request->res_province;
        $data['res_region'] = $request->res_region;
        $data['res_district'] = $request->res_district;
        $data['res_email'] = $request->res_email;
        $data['res_contact'] = $request->res_contact;
        $data['res_nationality'] = 'FILIPINO';
        $data['res_namemp'] = $request->res_namemp;
        $data['res_addemp'] = $request->res_addemp;
        $data['res_datemp'] = $request->res_datemp;
        $data['res_salary'] = $request->res_salary;
        $data['res_classworker'] = $request->res_classworker;
        $data['res_qualification'] = $request->res_qualification;
        $data['res_educational'] = $request->res_educational;
        // $data['res_nc'] = $request->res_nc; kuwang ni siya
        $data['res_birthmonth'] = $request->res_birthmonth;
        $data['res_birthday'] = $request->res_birthday;
        $data['res_birthyear'] = $request->res_birthyear;
        $data['res_age'] = $request->res_age;
        $data['res_birthcity'] = $request->res_birthcity;
        $data['res_birthprov'] = $request->res_birthprov;
        $data['res_birthreg'] = $request->res_birthreg;
        $data['res_parent'] = $request->res_parent;
        $data['res_parentmailbar'] = $request->res_parentmailbar;
        $data['res_parentmailcit'] = $request->res_parentmailcit;
        $data['res_parentmailpro'] = $request->res_parentmailpro;
        $data['res_extension'] = $request->res_extension;
        $data['res_dateaccom'] = $request->res_dateaccom;
        $data['res_daterec'] = $request->res_daterec;
        $data['res_td'] = $request->res_td;
        $data['res_dm'] = $request->res_dm;
        $data['res_cd'] = $request->res_cd;
        $data['res_parentcon'] = $request->res_parentcon;
        $data['res_scholarship'] = $request->res_scholarship;
        
        DB::table('reservations')->where('res_id', $res_id)->update($data);
        Session::put('message', 'Well done!');
        return Redirect::to('reservation/');
    }
    public function remarks(Request $request, $res_id)
    {
        $rese = Reservation::find($res_id);
        return view('backend.reservation._remarks',compact('rese'));
    }
    public function addremarks(Request $request, $res_id)
    {
        $data = array();
        $data['res_update'] = $request->res_update;
        $data['res_updatedate'] = $request->res_updatedate;

        DB::table('reservations')->where('res_id', $res_id)->update($data);
        Session::put('message', 'Well done!');
        return Redirect::to('reservation/');
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
