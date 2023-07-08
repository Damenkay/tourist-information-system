@extends('layouts.user')
@section('content')
<div class="container1-1"> 

  <h2>Book a Tour</h2> 

  <div class="container1-2">
    <form action="{{Route('bookings.store')}}" method="POST"  class="contactform" enctype="multipart/form-data">
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
            <input name="username" type="text" id="forLgn" class=""  placeholder="Enter your username" value="{{Auth::user()->username}}" required>
          </div>
           
          <div class="form-group ">
            @error('city')
              <span class="text">
              {{$message}}
              </span>      
            @enderror
            <input name="city" type="text" id="forLgn" class=""  placeholder="Enter City" required id="forLgn">
          </div> 

          <div class="form-group ">
              @error('arrival_time')
                <span class="text">
                {{$message}}
                </span>      
              @enderror
              <input name="arrival_time" type="text" id="forLgn" class=""  placeholder="Enter time in the format HH:MMam/pm" required id="forLgn">
          </div> 


          <div class="form-group ">
              {{-- @error('destination')
                <span class="text">
                {{$message}}
                </span>      
              @enderror --}}
              <select name="destination" id="forLgn">
                <option value="">-Select Destination-</option>
                <option name="destination" value="Shere Hills">Shere Hills</option>
                <option name="destination" value="Jos Wild Life Park">Jos Wild Life Park</option>
                <option name="destination" value="Assop Falls">Assop Falls</option>
                <option name="destination" value="Kura Falls">Kura Falls</option>
                <option name="destination" value="Riyom Rocks">Riyom Rocks</option>
                <option name="destination" value="Solomon Lar Amusement Park">Solomon Lar Amusement Park</option>
                <option name="destination" value="Kerang Volcanic Mountain">Kerang Volcanic Mountain</option>
                <option name="destination" value="Pandam Game Reserve">Pandam Game Reserve</option>
                <option name="destination" value="Kahwang Rock Formation">Kahwang Rock Formation</option>
                <option name="destination" value="Jos Museum">Jos Museum</option>
              </select>
          </div> 

          
          <div class="form-group">
            <input type="submit" value="Book">
          </div>    
          
           
    </form>
  </div>
</div>



@endsection
