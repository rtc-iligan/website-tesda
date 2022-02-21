<?php

namespace App\Http\Controllers;
use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $qualis = Qualification::paginate(25);
        return view('backend.qualification.index',compact('qualis'));
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
            'cptr' => 'required',
            'date' => 'required',
            'hrs'  => 'required', 
            'type'  => 'required' 
        ]);

        $quali=new Qualification();
        $quali->title=$request->title;
        $quali->date=$request->date;
        $quali->cptr=$request->cptr;
        $quali->hrs=$request->hrs;
        $quali->type=$request->type;
        $quali->save();
        return redirect()->back()->with('success','Successfully Posted Qualification!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Qualification $quali)
    {
        return view('backend.qualification._update',compact('quali'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qualification $quali)
    {
        $quali->title=$request->title;
        $quali->cptr=$request->cptr;
        $quali->date=$request->date;
        $quali->hrs=$request->hrs;
        $quali->type=$request->type;
        $quali->update();

        return redirect()->back()->with('success','Successfully Updated Qualification!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
