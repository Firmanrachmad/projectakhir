<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
Use App\User;
Use PDF;
Use App\Model;
Use Storage;

class UserController extends Controller
{
    public function index()
    {   
        $users = User::All();
        return view ('manageuser', ['users'=>$users]);
    }
    public function add()
    {
    return view('adduser');
    }
    public function create(Request $request)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'roles' => $request->roles,
            'image' => $image_name,
        ]);
        return redirect('/manageuser');
    }
    public function edit($id)
    {       
        $users = User::find($id);   
        return view('edituser',['users'=>$users]);   
    }
    public function update($id, Request $request)
    {
        $users = User::find($id);
        if($request->file('image')){
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->roles = $request->roles;
        if($users->image && file_exists(storage_path('app/public/' . $users->image)))
        {
            Storage::delete('public/'.$users->image);
        }
        $image = $request->file('image')->store('images', 'public');
        $users->image = $image;
        $users->save();
        }
        return redirect('/manageusers');

    }
    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/manageuser');
    }
    public function cetak_pdf()
    {
        $users = User::all();
        $pdf = PDF::loadview('users_pdf',['users'=>$users]);
        return $pdf->stream();
    }
}
