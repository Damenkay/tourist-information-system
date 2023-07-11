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
                <a href="{{Route('tours.create')}}">Create Tours</a>
            </div>
           
        </div>
        <div class="table-container">
               <div class="table-wrapper">
                    <h1 style="margin-left:40%">All Tours</h1>
                    <table>
                       
                     @if (count($tours)>0)
                      <tr>
                        <th>Destination Name</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Action</th>
                        </tr>
                         
                       
                        @foreach( $tours as $tour )
                          <tr>
                              <td>{{$tour->destination_name}}</td> 
                              <td>{{$tour->location}}</td> 
                              <td>{{$tour->address}}</td>
                          
                              <td>
                                  {{-- <a href="{{ route('bookings.edit',$booking->id)}}" class="actionbtn">Edit</a> --}}
                                  <a href="/tours/{{$tour->id}}" class="actionbtn" id="actionbtn">view</a>
                              </td>
                        </tr>
                       
                        @endforeach
                        <tr> {!!$tours->links() !!}</tr>
                        
                      @else
                        <h4 style="margin-left:39%">No Records Found</h4>
                      @endif 
                     
                    </table>
        </div>
    </div>

   
    {{-- <script src="{{ URL::asset('js/script.js') }}"></script> --}}
@endsection
