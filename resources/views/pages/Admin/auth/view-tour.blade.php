@extends('layouts.admin')
@section('content')
        <div class="table-container">
               <div class="table-wrapper">
                    <h1 style="text-align: center">{{$tour->destination_name}}</h1>
                    <table>
                      <tr>
                        <th>Destination Name</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        </tr>
                    
                            <td>{{$tour->destination_name}}</td> 
                            <td>{{$tour->location}}</td> 
                            <td>{{$tour->address}}</td>
                            <td>{{$tour->created_at}}</td>
                            <td>{{$tour->updated_at}}</td>
                        </tr>
                     
                    </table>
            <a href="/dashboard"id="backbtn">Back</a>
        </div>



    {{-- <div class="table-wrapper">
    
        <table>
            
        @if (count($bookings)>0)
        <h1 style="text-align:center">{{$booking->destination}} Bookings</h1>
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
                        {{-- <a href="{{ route('delete',$booking->id)}}" class="actionbtn" id="actionbtn">Delete</a>
                    </td>
                </tr>

            

            @endforeach
            @else
                <h4 style="text-align:center">No Records Found</h4>
            @endif 
        
        </table>
    <a href="{{Route('admins.dashboard')}}"id="backbtn">Back</a>
    </div> --}}
</div>
@endsection
