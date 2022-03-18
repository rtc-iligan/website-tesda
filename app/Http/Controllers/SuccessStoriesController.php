<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuccessStories;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
class SuccessStoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $successstories=SuccessStories::paginate(3);
        return view('backend.successstories.index',compact('successstories'));
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
        $validatedData = $request->validate([
            'name' => 'required',
            'content' => 'required',
            'link' => 'required',
            'image' => 'required',
        ]);

        $successstories=new SuccessStories();
        $successstories->name=$request->name;
        $successstories->content=$request->content;
        $successstories->link=$request->link;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/successstories', $picture);
            $successstories->image = $url;  
        }
        $successstories->save();
        return redirect()->back()->with('success','Successfully Posted Success Stories!');
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
    public function edit(SuccessStories $successstory)
    {
          return view('backend.successstories._update',compact('successstory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuccessStories $successstory)
    {
        $successstory->name = $request->name;
        $successstory->content = $request->content;
        $successstory->link = $request->link;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/successstories', $picture);
            $successstory->image = $url;  
        }
        $successstory->update();
        return redirect()->back()->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuccessStories $successstory)
    {
        $successstory->delete();
        return redirect()->back()->with('success','Successfully Deleted!');    
    }
}
