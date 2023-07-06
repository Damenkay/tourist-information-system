@extends('layouts.user')
@section('content')
<div class="container1-1"> 

  <h2>Book a Tour</h2> 

  <div class="container1-2">
    <form action="{{route('bookings.update',$booking->id)}}" method="PATCH"  class="contactform" enctype="multipart/form-data">
          @csrf
          <div class="results">
            @if (Session::get('success'))
                <span class="alert alert-success">
                    {{Session::get('success')}}

                </span>
            @endif

            @if (Session::get('error'))
                <span class="alert alert-danger">
                    {{Session::get('error')}}
                </span>
            @endif
          </div>

          <div class="form-group">
            @error('username')
              <span class="text">
                {{$message}}
              </span>      
            @enderror
            <input name="username" type="text" id="forLgn" class="" placeholder="Enter your username" value="{{Auth::user()->username}}" required>
          </div>
           
          <div class="form-group ">
            @error('city')
              <span class="text">
              {{$message}}
              </span>      
            @enderror
            <input name="city" type="text" id="forLgn" class=""  placeholder="Enter destinaton city" value="{{old('city')}}" required id="forLgn">
          </div> 

          <div class="form-group ">
              @error('destination')
                <span class="text">
                {{$message}}
                </span>      
              @enderror
              <input name="destination" type="text" id="forLgn" class=""  placeholder="Enter your desired destinaton" value="" required id="forLgn">
          </div> 

          <div class="form-group ">
              @error('arrival_time')
                <span class="text">
                {{$message}}
                </span>      
              @enderror
              <input name="arrival_time" type="text" id="forLgn" class=""   placeholder="Enter time in the format HH:MMam/pm" value="" required id="forLgn">
            </div> 

          <div class="form-group">
            <input type="submit" value="Book">
          </div>    
          
           
    </form>
  </div>
</div>



@endsection
