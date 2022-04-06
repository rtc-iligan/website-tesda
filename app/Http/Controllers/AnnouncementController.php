<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
 
    public function index()
    {
        $announcement= Announcement::paginate(10);
        return view('backend.announcement.index',compact('announcement'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'content' => 'required',
            'location' => 'required',
            'date' => 'required',
        ]);

        $announcement=new Announcement();
        $announcement->title=$request->title;
        $announcement->subject=$request->subject;
        $announcement->content=$request->content;
        $announcement->location=$request->location;
        $announcement->date=$request->date;
        $announcement->save();

        return redirect()->back()->with('success','Successfully Posted Announcement!');
    }

    public function show($id)
    {
        //
    }

   
    public function edit(Announcement $announcement)
    {
        return view('backend.announcement._update',compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement)
    {
        $announcement->title=$request->title;
        $announcement->subject=$request->subject;
        $announcement->content=$request->content;
        $announcement->location=$request->location;
        $announcement->date=$request->date;
        $announcement->update();

        return redirect()->back()->with('success','Successfully Updated Announcement!');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->back()->with('success','Successfully Deleted Announcement!');
    }
}
