<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Pagination\Paginator;

class GalleryController extends Controller
{
    public function index()
    {
    	$galleries=Gallery::paginate(5);
        // dd($galleries);
       return view('backend.gallery.index',compact('galleries'));
    }
   public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'date' => 'required',
        ]);

        $gallery=new Gallery();
        $gallery->subject=$request->subject;
        $gallery->date=$request->date;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/gallery', $picture);
            $gallery->image = $url;  
        }
        $gallery->save();
        return redirect()->back()->with('success','Successfully Posted Gallery Image!');
    }
    public function edit(Gallery $gallery)
    {
    	 return view('backend.gallery._update',compact('gallery'));
    }
    public function show(Gallery $gallery)
    {
         return view('backend.gallery._view',compact('gallery'));
    }
    public function update(Request $request,  Gallery $gallery)
    {
        $gallery->subject = $request->subject;
        $gallery->date = $request->date;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/gallery', $picture);
            $gallery->image = $url;  
        }
        $gallery->update();
        return redirect()->back()->with('success','Successfully Updated!');
    }
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back()->with('success','Successfully Deleted!');        
    }
}
