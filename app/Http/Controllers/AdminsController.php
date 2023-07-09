<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\Tour;
use App\Models\tourist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::orderBY('created_at','desc')->simplePaginate(5);
        return view('pages.Admin.auth.adminDashboard')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.Admin.admnRegister');
    }

     /**
     * Show the form for loging in.
     */
    public function login()
    {
        return view('pages.Admin.adminLogin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);
        // dd($form_data);
        $admin = new Admin();
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $user = $admin->save();
        return redirect()->route('admins.login')->with('success', 'Admin account created successfully');
    }
   
     /**
     * Verify the the credentials to access dashboard.
     */
    public function check(Request $request){
        $credentials = $request->only('email','password');
            // dd($credentials);
        if(Auth::guard('admin')->attempt($credentials)){
                $request->session()->regenerateToken();
                return redirect()->intended('/dashboard')->with('success', 'Admin Logged in');
            }else{
                return back()->with(['error'=>'Invalid Credetials']);
        }
     
    }

    public function showAllBookings(){
        $bookings = Booking::orderBY('created_at','desc')->paginate(5);
        return view('pages.Admin.allBookings')->with('bookings',$bookings);
    }
    public function showAllTourists(){
        $tourists = tourist::orderBY('created_at','desc')->paginate(5);
        return view('pages.Admin.allTourists')->with('tourists',$tourists);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
