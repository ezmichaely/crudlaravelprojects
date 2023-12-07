<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;
use App\Models\Voters;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function register(){
        return view('/register');
    }

    public function index(){
        $voters = Voters::orderby('lastname','asc')->orderby('firstname','asc')->orderby('middlename','asc')->get();
        $i = 1;
        return view('/index', compact('i'), compact('voters'));
    }

    public function addVoter(){
        return view('/addVoter');
    }

    public function logout(){
        if(session()->has('LoggedIn')) {
            session()->pull('LoggedIn');
            return redirect('login');
        }
    }

    public function newUser(Request $request){
        $request->validate([
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'email' => 'required|email',
            'bdate' => 'required',
            'username' => 'required|min:6|unique:accounts',
            'password' => 'required_with:confirmpassword|min:6|same:confirmpassword',
            'confirmpassword' => 'min:6'
        ]);

        $register = new Accounts;
        $register->firstname = $request->firstname;
        $register->middleinitial = $request->middleinitial;
        $register->lastname = $request->lastname;
        $register->email = $request->email;
        $register->bdate = $request->bdate;
        $register->username = $request->username;
        $register->password = Hash::make($request->password);
        $save = $register->save();

        if($save){
            return back()->with('success', 'New Account registered!');
        } else {
            return back()->with('fail', 'Something went wrong, try again later!');
        }
    }


    public function loginUser(Request $request) {
        $request->validate([
            'username' => 'required|min:6',
            'password' => 'required|min:6'
        ]);

        $userInfo = Accounts::where('username', '=', $request->username)->first();

        if(!$userInfo) {
            return back()->with('fail', 'Username not found!');
        } else {
            if(Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedIn', $userInfo->id);
                return redirect('index');
            } else {
                return back()->with('fail', 'Incorrect password!');
            }
        }
    }

    public function newVoter(Request $request){
        $request->validate([
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'bdate' => 'required',
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
        $voter->bdate = $request->bdate;
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
