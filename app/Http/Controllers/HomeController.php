<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Personnel, Gallery, Qualification, TransparencySeal, Posting};
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
        return view('home');
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
    public function images()
    {
        $gallery = Gallery::get();
        return view('frontend.others.images',compact('gallery'));
    }
    public function newsupdates()
    {
        return view('frontend.others.newsupdates');
    }
    public function achiever()
    {
        return view('frontend.others.successtories');
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
        $trans = TransparencySeal::get();
         $post=Posting::orderBy('sort','ASC')->get()->groupBy('ts_id');
         foreach($trans as $trans){
            echo $trans;
            foreach( $post as  $post){
                echo $post->year;  echo '<br>';
                echo $post->sub_title;
                 echo $post->link;
             }
           
         }
       // return view('frontend.transparencys.transparencyseals',compact('trans','post'));
    }
}
