<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.Admin.createTour');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request ->validate([
                'destination_name' => 'required',
                'location' => 'required',
                'address' => 'required'
        ]);

        $tour = new Tour();
        $tour -> destination = $request -> destination_name;
        $tour -> location = $request -> location;
        $tour -> address = $request -> address;
        $tour-> save();
        return back()->with('success', 'Tour Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tour = Tour::find($id);
       
        return view('pages.Admin.auth.view-tour')->with('tour',$tour);
    }

    // public function showTourBookings($id){
    //     $bookings = Booking::where('id',$id)->orderBy('created_at', 'desc')->paginate(5);
    //     return view('pages.Admin.auth.view-tour')->with('bookings',$bookings);
    // }

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
    public function destroy($id)
    {
        $tour = Tour::destroy($id);
      
        return redirect()->back();
    }
}
