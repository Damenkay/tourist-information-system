@extends('layouts.app')
@section('content')
<div class="hero2"> 

    <h3 style="text-align: center; padding: 30px 0px 10px 0px;">Login</h3> 
   
    <div>
        <form action="" method="POST"  class="contactform" enctype="multipart/form-data">
            @csrf
            
          @error('email')
            <div class="text">
              {{$message}}
            </div>      
          @enderror
  
                <input name="email" type="email" id="" class=""  placeholder="Enter your email address" value="{{old('email')}}" required>
            
                @error('password')
                <div class="text">
                {{$message}}
                </div>      
                @enderror
        <br>
        <input name="password" type="password" id="" class=""  placeholder="Enter your password" required>
        <br>
         <input type="submit" value="Login">
                <p class="">New to Skills For Wealth? <a href="/volunteer/register"
                  class=""><u> Register here</u></a></p>  
          </form>
        </div>
  </div>



@endsection