<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\{tourist};

class PagesController extends Controller
{
    public function index(){
        $title = 'Tour Imo!'  ;  
        return view('pages.index')-> with('title',$title);
    }

    public function about(){

        return view('pages.about');
    }

    public function services(){

        return view('pages.services');
    }

    public function register(){

        return view('pages.tourist.register');
    }

    public function login(){

        return view('pages.tourist.login');
    }

    public function create(Request $request){
        $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'age' => 'required|min:1|max:3',
            'address' => 'required',
            'password' => 'required|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);
        // dd($form_data);
        // $tourist = new tourist();
        // $tourist->firstname = $request->firstname;
        // $tourist->lastname = $request->lastname;
        // $tourist->email = $request->email;
        // $tourist->phone = $request->phone;
        // $tourist->address = $request->address;
        // $tourist->password = Hash::make($request->password);
        // $tourist->course_id = $request->course_id;
        // $user = $tourist->save();
        // return to_route('tourist.login')->with('success', 'Tourist Account created successfully');
        return '1234';
     }

    public function check(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if(auth()->attempt($credentials)){
            if(auth()->user()->is_admin == 1){
                $request->session()->regenerateToken();
                return redirect()->route('admin.dashboard');
            }
        $request->session()->regenerateToken();
       
        return redirect()->route('tourist.dashboard')->with('success', 'Tourist Logged in');
    }
    return back()->withErrors(['error' => 'Invalid Username/Password!']);  
    }
}