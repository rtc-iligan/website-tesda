<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\{Role,Permission};
use Maatwebsite\Excel\Facades\Excel; 
use Illuminate\Http\Request;
use App\Exports\UserExport;
use App\Models\User;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!auth()->user()->can('view_users')) {
            abort(404);
        }

        $roles = Role::get();
        $data = User::with('roles')->get();

        if($request->excel) {
            return Excel::download(new UserExport($data), 'Users Export.xlsx');
        }

        return view('accounts.index',compact('data','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->can('create_users')) {
            abort(404);
        }

        $validatedData = $request->validate([
            'name' => 'required|min:1|max:256',
            'email' => 'required|email|max:256|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->save();  
        $user->assignRole($request->role);
        return redirect()->back()->with('success','User added successfully!');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function import_get()
    {
        $columns = ['name','email'];
        return view('accounts.import',compact('columns'));
    }

    public function import_post(Request $request)
    {
        $success_count = 0;
        $fail_count = 0;
        foreach($request->import as $item)
        {
            if($item['name'] != null) {
                $exist = User::where('email',$item['email'])->first();
                if(!$exist) {
                    $user = new User;
                    $user->name = $item['name'];
                    $user->email = $item['email'];
                    $user->password = \Hash::make('password');
                    $user->save();  
                    $user->assignRole(2);

                    $success_count++;
                } else {
                    $fail_count++;
                }
            }
        }

        $message = $success_count.' records successfully imported! '.$fail_count.' records has been ignored!';

        // return redirect()->back()->with('status'.$success_count.'Records successfully imported!,'.$fail_count.'records has been ignored!');
        return redirect()->back()->with('status',$message);
    }
}
