<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:10'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'Registered Succesfully');
        } else {
            return back()->with('failed', 'Please Register Again');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:10'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginID', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('success, login again');
            }
        } else {
            return back()->with('failed', 'Please Login Again');
        }
    }

    public function dashboard()
    {
        $data = array();
        if (Session::has('loginID')) {
            $data = User::where('id', '=', Session::get('loginID'))->first();
        }
        return view('dashboard', compact('data'));
    }


    public function logout()
    {
        if (Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('login');
        }
    }
}
