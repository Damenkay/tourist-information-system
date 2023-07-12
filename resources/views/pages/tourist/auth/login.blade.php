@extends('layouts.app')
@section('content')
<div class="container1-1"> 

    <h2>Login</h2> 

    <div class="container1-2">
      <form action="{{Route('check')}}" method="POST"  class="contactform" enctype="multipart/form-data">
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
              <input name="username" type="text" id="forLgn" class=""  placeholder="Enter your username" value="{{old('username')}}" required>
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
              <p class=""><a href="/register" class=""><u> Register here</u></a></p> 
            </div>
            <div class="redirectlink">
              <p class=""><a href="/admins/login" class=""><u>Admin Login</u></a></p> 
            </div>
             
      </form>
    </div>
  </div>



@endsection