@extends('layouts.app')
@section('content')

    <div class="container1-1"> 

        <h2 style="text-align: center; padding: 30px 0px 10px 0px;">Sign Up Here</h2> 
    
        <div class="container1-2"> 
            <form action="{{Route('create')}}" method="POST"  class="contactform" enctype="multipart/form-data">
                @csrf
                <div class="results">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    @if (Session::get('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif
                </div>


                <div class="form-group groupflex">
                    @error('firstname')
                    <p class="text-danger">{{$message}}</p>    
                    @enderror
                
                    <input name="firstname" type="text" class="" placeholder="Enter your firstname"  required>
                    

                    <div class="form-group">
                        @error('lastname')
                        <div class="text-danger">
                            {{$message}}
                        </div>      
                        @enderror
    
                        <input name="lastname" type="text" id="" class=""  placeholder="Enter your lastname" required>
                    </div>
                </div>
               
               
              
                <div class="form-group groupflex" >
                    @error('username')
                    <div class="text-danger">
                        {{$message}}
                    </div>      
                    @enderror

                    <input name="username" type="text" id="" class=""  placeholder="Choose a username" required>



                    <div class="form-group">
                        @error('email')
                        <div class="text-danger">
                            {{$message}}
                        </div>     
                        @enderror
    
                        <input name="email" type="email" id="" class="" placeholder="Enter your email address" required>
                    </div>

                </div>
              
               
              
                <div class="form-group groupflex">
                    @error('address')
                    <div class="text-danger">
                        {{$message}}
                    </div>     
                    @enderror

                    <input name="address" type="textarea" id="" class="" placeholder="Enter your address" required>


                    <div class="form-group">
                        @error('age')
                        <div class="text-danger">
                            {{$message}}
                        </div>      
                        @enderror
    
                        <input name="age" type="text" id="" class=""  placeholder="Enter your age" required>
                    </div>
                  

                </div>

               
               
                <div class="form-group groupflex">
                    @error('password')
                    <div class="text-danger">
                        {{$message}}
                    </div>     
                    @enderror

                    <input name="password" type="password" id="" class=""  placeholder="Enter a password" required>

                    <div class="form-group">
                        @error('password_confirmation')
                        <div class="text-danger">
                            {{$message}}
                        </div>     
                        @enderror
    
                        <input name="password_confirmation" type="password" id="" class=""  placeholder="Confirm your password"  style="margin: " required>
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