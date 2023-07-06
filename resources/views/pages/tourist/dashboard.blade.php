@extends('layouts.user')
@section('content')
        <div class="dashhero">
            <h1>Welcome to your Dashboard {{Auth::user()->username}}</h1>
        </div>
        <div class="dashflex">
            
            <a href="/bookings" id="htxt">
                <div class="bookingcard">
                    <h4>Bookings</h4>
                </div>
            </a>
            <a href="/bookings/create" id="htxt">
                <div class="newbookingcard">
                    <h4>New Booking</h4>
                </div>
            </a>
            
        </div>

    {{-- <div class="sidebar">
        <div class="sidebar_container">
            <div class="sidebar_item">
                <i class="fas fa-th-large"></i>
                <p>{{Auth::user()->username}}</p>
            </div>

            <div class="sidebar_item">
                <i class="fas fa-book"></i>
                <a href="/bookings" style="text-decoration: none, color:white" id="dbtn">Bookings</a>
            </div>

            <div class="sidebar_item">
                <i class="fas fa-id-card"></i>
                <a href="/bookings/create" style="text-decoration: none, color:white " id="dbtn">New Booking</a>
            </div>

        </div>
    </div> --}}
   
    <script src="{{ URL::asset('js/script.js') }}"></script>
@endsection
