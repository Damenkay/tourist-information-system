@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-item">
                <a href="{{Route('allBookings')}}">All Bookings</a>
            </div>
            <div class="sidebar-item">
                <a href="{{Route('allTourists')}}">All Users</a>
            </div>
            <div class="sidebar-item">
                <a href="{{Route('allTourists')}}">Create Tours</a>
            </div>
           
        </div>
        <div class="bdy-content">
               <div class="table-ontainer">



               </div>
        </div>
    </div>

   
    {{-- <script src="{{ URL::asset('js/script.js') }}"></script> --}}
@endsection
