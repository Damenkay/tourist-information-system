@extends('layouts.admin')
@section('content')
<div class="container1-1"> 

  <h2>Create New Tour</h2> 

  <div class="container1-2">
    <form action="{{Route('tours.store')}}" method="POST"  class="contactform" enctype="multipart/form-data">
          @csrf
          {{-- <div class="results">
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
          </div> --}}

          <div class="form-group">
            @error('destination_name')
              <span class="text">
                {{$message}}
              </span>      
            @enderror
            <input name="destination_name" type="text" id="forLgn" class=""  placeholder="Enter Destination Name" value="" required>
          </div>
           
          <div class="form-group ">
            @error('location')
              <span class="text">
              {{$message}}
              </span>      
            @enderror
            <input name="location" type="text" id="forLgn" class=""  placeholder="Destination Location" required id="forLgn">
          </div> 

          <div class="form-group ">
              @error('address')
                <span class="text">
                {{$message}}
                </span>      
              @enderror
              <input name="address" type="text" id="forLgn" class=""  placeholder="Destination Address" required id="forLgn">
          </div> 

          
          <div class="form-group">
            <input type="submit" value="Create">
          </div>    
          
           
    </form>
  </div>
</div>



@endsection
