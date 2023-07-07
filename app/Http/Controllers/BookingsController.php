<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\tourist;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $bookings = Booking::orderBY('created_at','desc')->paginate(5);
        $user_id= auth()->user()->id;
        $user = tourist::find($user_id);
        return view('pages.tourist.booking')->with('bookings',$user->bookings);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('pages.tourist.bcreate');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
        $form_data = $request->validate([
            'username' => 'required',
            'city' => 'required',
            'destination' => 'required',
            'arrival_time' => 'required',
        ]);

        $booking = new Booking();
        $booking -> username = $request->username;
        $booking -> city = $request->city;
        $booking -> destination = $request->destination;
        $booking -> arrival_time = $request->arrival_time;
        $booking -> tourist_id = auth()->user()->id;
        $booking -> save();
        return redirect('/bookings')->with('success', 'Booking created');

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
    public function edit($id)
    {
        $booking = Booking::findOrfail($id);
        return view('pages.tourist.bedit')->with('booking',$booking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // $booking = Booking::find($id);
        // $booking->update([ 
        // $booking -> username = $request->username,
        // $booking -> city = $request->city,
        // $booking -> destination = $request->destination,
        // $booking -> arrival_time = $request->arrival_time,]);
        // $input = $request->all();

        // $booking->update($input);
        // return view('pages.tourist.booking');
        // redirect()->route('/bookings')
        //                 ->with('success','Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $booking = Booking::destroy($id);
      
        return redirect()->back();
    }
}
