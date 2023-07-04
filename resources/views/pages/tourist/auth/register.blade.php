@extends('layouts.app')
@section('content')

    <div class="container1-1"> 

        <h2 style="text-align: center; padding: 30px 0px 10px 0px;">Sign Up Here</h2> 
    
        <div class="container1-2"> 
            <form action="{{Route('create')}}" method="POST"  class="contactform" enctype="multipart/form-data">
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

                <div class="groupflex">

                    <div class="form-group">
                        @error('firstname')
                        <span class="text-danger">{{$message}}</span>    
                        @enderror
                    
                        <input name="firstname" type="text" class="" placeholder="Enter your firstname"  required>
                        
                    </div>
                    <div class="form-group">
                        @error('lastname')
                        <span class="text-danger">
                            {{$message}}
                        </span>      
                        @enderror
    
                        <input name="lastname" type="text" id="" class=""  placeholder="Enter your lastname" required>
                    </div>
                </div>
               
               
               
                <div class="groupflex">
                        
                    <div class="form-group" >
                        @error('username')
                        <span class="text-danger">
                            {{$message}}
                        </span>      
                        @enderror
    
                        <input name="username" type="text" id="" class=""  placeholder="Choose a username" required>
    
                    </div>

                    <div class="form-group">
                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>     
                        @enderror
    
                        <input name="email" type="email" id="" class="" placeholder="Enter your email address" required>
                    </div>

                </div>
               
              
               
                <div class="groupflex">

                    <div class="form-group ">
                        @error('address')
                        <span class="text-danger">
                            {{$message}}
                        </span>     
                        @enderror
    
                        <input name="address" type="textarea" id="" class="" placeholder="Enter your address" required>
                        
                    </div>

                    <div class="form-group">
                        @error('age')
                        <span class="text-danger">
                            {{$message}}
                        </span>      
                        @enderror
    
                        <input name="age" type="text" id="" class=""  placeholder="Enter your age" required>
                    </div>


                </div>
               

               
               <div class="groupflex">

                    <div class="form-group">
                        @error('password')
                        <span class="text-danger">
                            {{$message}}
                        </span>     
                        @enderror

                        <input name="password" type="password" id="" class=""  placeholder="Enter a password" required>

                    </div>

                    <div class="form-group">
                        @error('password_confirmation')
                        <span class="text-danger">
                            {{$message}}
                        </span>     
                        @enderror
    
                        <input name="password_confirmation" type="password" id="" class=""  placeholder="Confirm your password"  style="margin: " required>
                    </div>

               </div>
                
              
                <div class="form-group">
                    @error('sex')
                    <span class="text-danger">
                        {{$message}}
                    </span>      
                    @enderror
                    <div class="form-group">
                        <label for="sex" class="radio-label">
                            <input type="radio" name="sex" value="male">
                            <span class="radio-custom"></span>Male
                       </label> 
                       <label for="sex" class="radio-label">
                            <input type="radio" name="sex" value="female">
                            <span class="radio-custom"></span>Female
                        </label>
                    </div>
                </div>
            
               
               <div class="form-group">
                    <input type="submit" value="Register">
               </div>
                
               <div class="redirectlink">
                    <p class="">Already have an account? <a href="/login"
                        class=""><u>Login here</u></a>
                    </p>  
                </div>
                   
            </form>
        </div>
    </div>
@endsection