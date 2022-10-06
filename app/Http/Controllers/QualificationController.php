<?php

namespace App\Http\Controllers;
use App\Models\Qualification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

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
            'discription'  => 'required',
            'tuition_fee'  => 'required',
            'abrv'  => 'required',
            'sector'  => 'required',
            'image' => 'required',
        ]);

        $quali=new Qualification();
        $quali->title=$request->title;
        $quali->date=$request->date;
        $quali->cptr=$request->cptr;
        $quali->hrs=$request->hrs;
        $quali->type=$request->type;
        $quali->discription=$request->discription;
        $quali->tuition_fee=$request->tuition_fee;
        $quali->abrv=$request->abrv;
        $quali->sector=$request->sector;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/qualification', $picture);
            $quali->image = $url;  
        }
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
    public function edit(Qualification $qualification)
    {
        return view('backend.qualification._update',compact('qualification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qualification $qualification)
    {
        $qualification->title=$request->title;
        $qualification->cptr=$request->cptr;
        $qualification->date=$request->date;
        $qualification->hrs=$request->hrs;
        $qualification->type=$request->type;
        $qualification->discription=$request->discription;
        $qualification->tuition_fee=$request->tuition_fee;
        $qualification->abrv=$request->abrv;
        $qualification->sector=$request->sector;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/qualification', $picture);
            $qualification->image = $url;  
        }
        $qualification->update();

        return redirect()->back()->with('success','Successfully Updated Qualification!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification)
    {
        $qualification->delete();
        return redirect()->back()->with('success','Successfully Deleted Qualification!');
    }
   
}
