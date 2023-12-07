<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;
use App\Models\Voters;
use Illuminate\Support\Facades\Hash;

class AccountsController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function register(){
        return view('/register');
    }

    public function home(){
        $voters = Voters::orderby('lastname','asc')->orderby('firstname','asc')->orderby('middlename','asc')->get();
        $i = 1;
        return view('/home', compact('i'), compact('voters'));

        // return view('/home');
    }

    public function addvoter(){
        return view('/addvoter');
    }

    public function logout(){
        if(session()->has('LoggedIn')) {
            session()->pull('LoggedIn');
            return redirect('login');
        }
    }

    public function addaccount(Request $request){
        $request->validate([
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'birthdate' => 'required',
            'username' => 'required|min:6|unique:accounts',
            'password' => 'required_with:confirmpassword|min:6|same:confirmpassword',
            'confirmpassword' => 'min:6'
        ]);

        $user = new Accounts;
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->lastname = $request->lastname;
        $user->birthdate = $request->birthdate;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if($save){
            return back()->with('success', 'New Account registered!');
        } else {
            return back()->with('fail', 'Something went wrong, try again later!');
        }
    }


    public function loginaccount(Request $request) {
        $request->validate([
            'username' => 'required|min:6',
            'password' => 'required|min:6'
        ]);

        $uinfo = Accounts::where('username', '=', $request->username)->first();

        if(!$uinfo) {
            return back()->with('fail', 'Username not found!');
        } else {
            if(Hash::check($request->password, $uinfo->password)) {
                $request->session()->put('LoggedIn', $uinfo->id);
                return redirect('home');
            } else {
                return back()->with('fail', 'Incorrect password!');
            }
        }
    }



    public function newvoter(Request $request){
        $request->validate([
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'birthdate' => 'required',
            'purok' => 'required',
            'barangay' => 'required',
            'city' => 'required',
            'father' => 'required|min:2',
            'mother' => 'required|min:2',
        ]);

        $voter = new Voters;
        $voter->firstname = $request->firstname;
        $voter->middlename = $request->middlename;
        $voter->lastname = $request->lastname;
        $voter->birthdate = $request->birthdate;
        $voter->purok = $request->purok;
        $voter->barangay = $request->barangay;
        $voter->city = $request->city;
        $voter->father = $request->father;
        $voter->mother = $request->mother;
        $save = $voter->save();

        if($save){
            return back()->with('success', 'New Voter registered!');
        } else {
            return back()->with('fail', 'Something went wrong, try again later!');
        }
    }
}
