<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;
use App\Models\Products;
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
        $products = Products::orderby('name','asc')->get();
        $i = 1;
        return view('/index', compact('i'), compact('products'));
    }

    public function addProduct(){
        return view('/addProduct');
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
            'username' => 'required|min:6|unique:accounts',
            'password' => 'required_with:confirmpassword|min:6|same:confirmpassword',
            'confirmpassword' => 'min:6'
        ]);

        $register = new Accounts;
        $register->firstname = $request->firstname;
        $register->lastname = $request->lastname;
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

    public function newProduct(Request $request){
        $request->validate([
            'name' => ['required', 'min:2'],
            'price' => ['required', 'numeric', 'min:1'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'description' => ['required', 'min:2']
        ]);

        $products = new Products;

        $products->name = $request->name;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->description = $request->description;

        $newProduct = $products->save();

        if($newProduct){
            return back()->with('success', 'New Product Added!');
        } else {
            return back()->with('fail', 'Something went wrong!');
        }
    }
}
