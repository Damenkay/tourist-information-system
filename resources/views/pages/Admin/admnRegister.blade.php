@extends('layouts.app')
@section('content')
<div class="container1-1"> 

    <h2>Admin Register</h2> 

    <div class="container1-2">
      <form action="{{Route('admins.store')}}" method="POST"  class="contactform" enctype="multipart/form-data">
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
              @error('firstname')
                <span class="text">
                  {{$message}}
                </span>      
              @enderror
              <input name="firstname" type="text" id="forLgn" class=""  placeholder="Enter your Firstname" value="" required>
            </div>

            <div class="form-group">
                @error('lastname')
                  <span class="text">
                    {{$message}}
                  </span>      
                @enderror
                <input name="lastname" type="text" id="forLgn" class=""  placeholder="Enter your Lastname" value="" required>
            </div>

            <div class="form-group">
                @error('email')
                  <span class="text">
                    {{$message}}
                  </span>      
                @enderror
                <input name="email" type="email" id="forLgn" class=""  placeholder="Enter Email" required>
            </div>
             
            <div class="form-group ">
              @error('password')
                <span class="text">
                {{$message}}
                </span>      
              @enderror
              <input name="password" type="password" id="forLgn" class=""  placeholder="Enter your password" required id="forLgn">
            </div> 

            <div class="form-group ">
                @error('password_confirmation')
                  <span class="text">
                  {{$message}}
                  </span>      
                @enderror
                <input name="password_confirmation" type="password" id="forLgn" class=""  placeholder="Confirm your password" required id="forLgn">
              </div> 

            <div class="form-group">
              <input type="submit" value="Register">
            </div>    
            
            <div class="redirectlink">
                <p class="">Already have an account? <a href="/admins/login"
                    class=""><u>Login here</u></a>
                </p>  
            </div>
             
      </form>
    </div>
  </div>



@endsection