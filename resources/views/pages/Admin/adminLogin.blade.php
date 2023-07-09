@extends('layouts.app')
@section('content')
<div class="container1-1"> 

    <h2>Admin login</h2> 

    <div class="container1-2">
      <form action="{{Route('admins.check')}}" method="POST"  class="contactform" enctype="multipart/form-data">
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
              @error('email')
                <span class="text">
                  {{$message}}
                </span>      
              @enderror
              <input name="email" type="email" id="forLgn" class=""  placeholder="Enter your email" value="{{old('email')}}" required>
            </div>
             
            <div class="form-group ">
              @error('password')
                <span class="text">
                {{$message}}
                </span>      
              @enderror
              <input name="password" type="password" id="forLgn" class=""  placeholder="Enter your password" required id="forLgn">
            </div> 

            <div class="form-group">
              <input type="submit" value="Login">
            </div>    
            
            <div class="redirectlink">
              <p class=""><a href="/admins/create" class=""><u> Register here</u></a></p> 
            </div>
             
      </form>
    </div>
  </div>



@endsection