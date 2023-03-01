<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Models\{Personnel, Gallery, Qualification, TransparencySeal, Posting, News, SuccessStories, Reservation, User};
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getQualification = Qualification::count();
        $getReservation = Reservation::count();
        $getUser = User::count();
      
         $countGender = DB::table('reservations')
        ->select(DB::raw('res_gender, count(*) as count'))
        ->groupBy('res_gender')
        ->get();
        $genderFemale = $countGender[0]->count;
        $genderMale = $countGender[1]->count;

        
        
        return view('home', compact('getQualification','getReservation','getUser','countGender','genderFemale','genderMale'));
    }
    public function getResByRemarks()
    {
        // $dataGetResByRemarks=Reservation::select(['res_qualification', 'res_update', DB::raw('COUNT(*)')])
        // ->groupBy('res_qualification', 'res_update')
        // ->orderBy('res_qualification')
        // ->get()
        // ->groupBy('res_qualification');

        $dataGetResByRemarks=Reservation::select(['res_qualification', 'res_update', DB::raw('COUNT(*)')])
        ->where('res_qualification','Automotive Servicing NC I')
        ->groupBy('res_qualification', 'res_update')
        ->orderBy('res_qualification')
        ->get()
        ->groupBy('res_qualification');


        return response()->json($dataGetResByRemarks);
    }
    public function getReservePerYearMonth()
    {
        return $getReservePerYearMonth = DB::table('reservations')
        ->select(DB::raw('count(*) as user_count, year(registeredDate) as year, month(registeredDate) as month'))
        ->whereYear('registeredDate', '=', 2021)
        ->groupBy('year', 'month')
        ->get();

       return response()->json($getReservePerYearMonth);
    }
  
    public function getReservePerMonth($year)
    {
        $users = Reservation::select('res_id', 'registeredDate')
        ->whereYear('registeredDate', '=', $year)
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->registeredDate)->format('m');
    });

    $usermcount = [];
    $userArr = [];

    foreach ($users as $key => $value) {
        $usermcount[(int)$key] = count($value);
    }

    $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    for ($i = 1; $i <= 12; $i++) {
        if (!empty($usermcount[$i])) {
            $userArr[$i]['count'] = $usermcount[$i];
        } else {
            $userArr[$i]['count'] = 0;
        }
       $userArr[$i]['month'] = $month[$i - 1];
    }
    return response()->json(array_values($userArr));
    }
    public function getResPerMonth()
    {
        $users = Reservation::select('res_id', 'registeredDate')
        ->whereYear('registeredDate', '=', 2022)
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->registeredDate)->format('m');
    });

    $usermcount = [];
    $userArr = [];

    foreach ($users as $key => $value) {
        $usermcount[(int)$key] = count($value);
    }

    $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    for ($i = 1; $i <= 12; $i++) {
        if (!empty($usermcount[$i])) {
            $userArr[$i]['count'] = $usermcount[$i];
        } else {
            $userArr[$i]['count'] = 0;
        }
       $userArr[$i]['month'] = $month[$i - 1];
    }
    return response()->json(array_values($userArr));
    }
    public function reservation()
    {
        return view('frontend.others.reservation');
    }
    public function locationmap()
    {
        return view('frontend.about.location-map');
    }
    public function missionvision()
    {
        return view('frontend.about.missionvision');
    }
    public function organizationalstructure()
    {
        return view('frontend.about.organizational-structure');
    }
    public function rtcpersonnel()
    {
        $regular = Personnel::where('type','=','Regular')->get();
        $joborder = Personnel::where('type','=','Job Order')->get();
        return view('frontend.about.rtc-personnel',compact('joborder','regular'));
    }
    public function contactus()
    {
        return view('frontend.others.contactus');
    }
    public function images(Request $request)
    {
        $gallery = Gallery::paginate(6);
        $gallerys = $gallery->appends($request->except('page'));
        return view('frontend.others.images',compact('gallerys'));
    }
    public function newsupdates(Request $request)
    {
        $news=\App\Models\News::paginate(4);
        $newss = $news->appends($request->except('page'));
        return view('frontend.others.newsupdates',compact('newss'));
    }
    public function achiever()
    {
        $ss = SuccessStories::paginate(2);
        return view('frontend.others.successtories', compact('ss'));
    }
    public function requirements()
    {
        return view('frontend.others.requirements');
    }
    public function qualification()
    {
         $qualiSector = Qualification::select('sector')->get()->keyBy('sector');
        return view('frontend.others.qualification', compact('qualiSector'));
    }
    public function sector($sector)
    {
        
        $perQualiSector = Qualification::where('sector',$sector)->get();
        return view('frontend.others.sector',compact('perQualiSector','sector'));
    }
    public function perQualiSector($id)
    {
        $qualification = Qualification::where('id',$id)->first();
        return view('frontend.others.perQualiSector',compact('qualification'));
    }
    public function transparencyseals()
    {
        $trans = TransparencySeal::orderBy('sort','ASC')->get();
     
        return view('frontend.transparencys.transparencyseals',compact('trans'));
    }
    public function philgeps()
    {
        return view('frontend.transparencys.philgeps');
    }
    public function citizenscharter()
    {
        return view('frontend.transparencys.citizencharter');
    }
    public function cac()
    {
        return view('frontend.others.cac');
    }
    public function org()
    {
         return view('frontend.others._modalOrgStructure');
    }
}
