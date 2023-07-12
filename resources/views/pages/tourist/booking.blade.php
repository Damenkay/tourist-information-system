@extends('layouts.user')
@section('content')

<div class="userbooking">
  
  <table>
     
   @if (count($bookings)>0)
   <h1 style="text-align:center">Bookings</h1>
    <tr>
      <th>Username</th>
      <th>City</th>
      <th>Destinaton</th>
      <th>Arrival Time</th>
      <th>Action</th>
      </tr>
       
     
      @foreach( $bookings as $booking )
        <tr>
            <td>{{$booking->username}}</td> 
            <td>{{$booking->city}}</td> 
            <td>{{$booking->destination}}</td>
            <td>{{$booking->arrival_time}}</td>
        
            <td>
                {{-- <a href="{{ route('bookings.edit',$booking->id)}}" class="actionbtn">Edit</a> --}}
                <a href="{{ route('delete',$booking->id)}}" class="actionbtn" id="actionbtn">Delete</a>
            </td>
      </tr>

      

      @endforeach
    @else
      <h4 style="text-align:center">No Records Found</h4>
    @endif 
   
  </table>
  <a href="/tourist/dashboard"id="backbtn">Back</a>
</div>
@endsection