<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\{tourist};

class PagesController extends Controller
{
    public function index(){
        $title = 'Tour Plateau!'  ;  
        return view('pages.index')-> with('title',$title);
    }

    public function about(){

        return view('pages.about');
    }

    public function services(){
           
        return view('pages.services');
    }

    public function register(){

        return view('pages.tourist.auth.register');
    }

    public function login(){

        return view('pages.tourist.auth.login');
    }

    public function create(Request $request){
        $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:tourists|min:4',
            'email' => 'required|email|unique:tourists',
            'age' => 'required|min:1|max:3',
            'sex' => 'required',
            'address' => 'required',
            'password' => 'required|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);
        // dd($form_data);
        $tourist = new tourist();
        $tourist->firstname = $request->firstname;
        $tourist->lastname = $request->lastname;
        $tourist->username = $request->username;
        $tourist->email = $request->email;
        $tourist->age = $request->age;
        $tourist->sex = $request->sex;
        $tourist->address = $request->address;
        $tourist->password = Hash::make($request->password);
        $user = $tourist->save();
        return redirect()->route('login')->with('success', 'User created successfully');
       
     }

    public function check(Request $request){
        $credentials = $request->validate([
            'username' => 'required|min:4',
            'password' => 'required|min:4'
        ]);
        if(auth()->attempt($credentials)){
            // if(auth()->user()->is_admin == 1){
            //     $request->session()->regenerateToken();
            //     return redirect()->route('admin.dashboard');
            // }
        $request->session()->regenerateToken();
       
        return redirect()->route('dashboard')->with('success', 'Tourist Logged in');
    }
    return back()->withErrors(['error' => 'Invalid Username/Password!']);  
    }

    public function dashboard(){
        

        return view('pages.tourist.dashboard');
    } 

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}