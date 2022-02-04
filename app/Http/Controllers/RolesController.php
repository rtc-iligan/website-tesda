<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\{Role,Permission};

class RolesController extends Controller
{
    public function index()
    {
        $data = Role::get();
        $perms = Permission::get();
        return view('roles.index',compact('data','perms'));
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        if($request->permission > 0) {
            foreach ($request->permission as $i => $item) {
                $role->givePermissionTo($item);
            }
        }
        return redirect()->back()->with('success','Role added successfully!');
    }
}
 