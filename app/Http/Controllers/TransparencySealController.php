<?php

namespace App\Http\Controllers;
use App\Models\TransparencySeal;
use Illuminate\Http\Request;


class TransparencySealController extends Controller
{
    public function index()
    {   
        $ts=TransparencySeal::orderBy('sort','ASC')->get();
        return view('backend.transparency.index',compact('ts'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);
        $ts=new TransparencySeal();
        $ts->title=$request->title;
        $ts->created_at=$request->created_at;
        $ts->save();
        return redirect()->back()->with('success','Successfully Posted!');
    }

    public function updateOrder(Request $request)
    {
        $ts = TransparencySeal::get();

        foreach ($ts as $post) {
            foreach ($request->sort as $sort) {
                if ($sort['id'] == $post->id) {
                    $post->update(['sort' => $sort['position']]);

                    // $data = array();
                    // $data['sort'] = $sort['position'];
                    // DB::table('ts')
                    //     ->where('sort', $sort['id'])
                    //     ->update($data);
                }
            }
        }

        // return $request->sort;
        
        return response('Update Successfully.', 200);
    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {
    	
    }
}
