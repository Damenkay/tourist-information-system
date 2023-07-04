@extends('layouts.user')
@section('content')
<div class="groupflex">
    <div class="sidebar">
        <div class="sidebar_container">
            <div class="sidebar_item">
                <i class="fas fa-th-large" id="dash"></i>
                <p>DASBOARD</p>
            </div>

            <div class="sidebar_item">
                <i class="fas fa-eye"></i>
                <p>Hotel Reservatons</p>
            </div>
            <div class="sidebar_item">
                <i class="far fa-calendar"></i>
                <p>Transit Tickets</p>
            </div>
            <div class="sidebar_item">
                <i class="fas fa-users"></i>
                <p><a href="/bookings">Tour Booking</a></p>
            </div>
        </div>
    </div>
    <div class="studentDetails">

        <div class="content">
    
            <div class="volposts">
                <h4>Booking Details</h4>
                <table>
                    <tr>
                    <th>Username</th>
                    <th>City</th>
                    <th>Destination</th>
                    <th>Arrival time</th>
                    </tr>
            
                    {{-- @foreach( ) --}}
                    <tr>
                        <td>{{Auth::user()->username}}</td> 
                        <td> x</td> 
                        <td> x</td>
                        <td> x </td>
                    
                        <td>
                            <a href="" class="actionbtn" id="actionbtn">Delete</a>
                        </td>
                   </tr>
            
                    {{-- @endforeach --}}
                </table>
            </div>
        
        </div>
    
        
        </div>
    
    
    
        <script src="{{ URL::asset('js/script.js') }}"></script>
    </div>
</div>

@endsection
