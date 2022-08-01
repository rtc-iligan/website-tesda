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

        // return $request->All();
        // foreach ($ts as $post) {
        //     foreach ($request->order as $order) {
        //         if ($order['id'] == $post->id) {
        //             $post->update(['sort' => $order['position']]);

                    // $data = array();
                    // $data['sort'] = $sort['position'];
                    // DB::table('ts')
                    //     ->where('sort', $sort['id'])
                    //     ->update($data);
        //         }
        //     }
        // }
        foreach ($ts as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['sort' => $order['position']]);

                    // $data = array();
                    // $data['order'] = $order['position'];
                    // DB::table('posts')
                    //     ->where('order', $order['id'])
                    //     ->update($data);
                }
            }
        }

       
        
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
