<?php

namespace App\Http\Controllers;

use App\Models\{Posting, TransparencySeal};
use Illuminate\Http\Request;
use DB;
class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($posting_id)
    {
        $getTransparencySealID =  TransparencySeal::where('id', $posting_id)->first();
        $posting=Posting::orderBy('sort','ASC')->get();
        return view('backend.transparency.posting',compact('posting','getTransparencySealID'));
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
        $data = array();
        $data['ts_id'] = $request->ts_id; 
        $data['year'] = $request->year;
        $data['link'] = $request->link;
        $data['sub_title'] = $request->sub_title;

        DB::table('postings')->insert($data);
        return redirect()->back()->with('success','Posted Successfully!!');
    }
    public function updateOrders(Request $request)
    {
        $posting = Posting::get();
        foreach ($posting as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['sort' => $order['position']]);
                }
            }
        }
        return response('Update Successfully.', 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function show(Posting $posting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function edit(Posting $posting)
    {
        return view('backend.transparency._updatePosting',compact('posting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posting $posting)
    {
        $posting->year=$request->year;
        $posting->sub_title=$request->sub_title;
        $posting->link=$request->link;
        $posting->update();

        return redirect()->back()->with('success','Successfully Updated Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posting $posting)
    {
        //
    }
}
