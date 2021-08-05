<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\User_model;
use App\Models\User;

class UserController extends Controller
{
    function dashboard()
    {
        $data = User_model::all();
        return view('dashboard', compact("data"));
    }
    function userform()
    {
        return view('userform');
    }
    function bulk_form()
    {
        return view('bulk_form');
    }
    function create(REQUEST $request)
    {
        
        $user = new User_model;
        $id = rand() . time();
        
        $picture = $id . "." . $request->file('picture')->getClientOriginalExtension();
        $request->file('picture')->move("public/picture/", $picture);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->picture = $picture;
        
        $query = $user->save();
        if ($query) {
            return redirect('/dashboard')->with('message', 'Success!');;
        } else {
            return back()->with('message', 'Error!');
        }
    }

    function check(REQUEST $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = Login::where('username', '=', $request->username)->first();
        if ($user) {
            return redirect('/dashboard');
        } else {
            return back()->with('fail', 'no account');
        }
    }
    function edit($id)
    {
        $edit = DB::table('users_data')
            ->where('id', $id)
            ->first();
        $data = [
            'info' => $edit
        ];
        return view('edit', $data);
    }
    function delete($id)
    {
        $delete = DB::table('users_data')
            ->where('id', $id)
            ->delete();
        if ($delete) {
            return back()->with('no', '1');
        } else {
            return back()->with('no', 'fail');
        }
    }
    function update(REQUEST $request)
    {
        $updating = DB::table('users_data')
            ->where('id', $request->input('cid'))
            ->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                // 'picture' => $request->input('picture'),
            ]);
        return redirect('/dashboard');
    }

    function search(REQUEST $request)
    {
        $search = $request->input('searchVal');

        $posts = DB::table('users_data')->where('first_name', 'like', '%' . $search . '%')
                                        ->orWhere('address', 'like', '%' . $search . '%')->get();
        return view('user_profile', ['posts' => $posts]);
    }
    function view($id)
    {
       $data = User_model::find($id);
       return view('view', compact("data"));
    }
}