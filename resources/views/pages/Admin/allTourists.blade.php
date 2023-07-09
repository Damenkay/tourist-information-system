@extends('layouts.admin')
@section('content')

<div class="userbooking">
  <h1 style="margin-left:40%">All Tourists</h1>
  <table>
     
   @if (count($tourists)>0)
    <tr>
      <th>Username</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Age</th>
      <th>Sex</th>
      <th>Address</th>
      <th>Created time</th>
      <th>Action</th>
      </tr>
       
     
      @foreach( $tourists as $tourist )
        <tr>
            <td>{{$tourist->username}}</td> 
            <td>{{$tourist->firstname}}</td> 
            <td>{{$tourist->lastname}}</td>
            <td>{{$tourist->email}}</td>
            <td>{{$tourist->age}}</td>
            <td>{{$tourist->sex}}</td>
            <td>{{$tourist->Address}}</td>
            <td>{{$tourist->created_at}}</td>
        
            <td>
                {{-- <a href="{{ route('bookings.edit',$booking->id)}}" class="actionbtn">Edit</a> --}}
                <a href="{{ route('delete',$tourist->id)}}" class="actionbtn" id="actionbtn">Delete</a>
            </td>
      </tr>

      

      @endforeach
    @else
      <h4 style="margin-left:39%">No Records Found</h4>
    @endif 
   
  </table>
  <a href="/dashboard"id="backbtn">Back</a>
</div>
@endsection