@extends('layouts.app')
@section('content')

    <div class="hero" >
        <div class="caro">
            <div class="car">
                <div class="car-it hero">
                    <img src={{asset('img/caro1.jpeg')}} alt="hero background image">
                </div>
                <div class="car-it hero">
                    <img src={{asset('img/caro2.jpeg')}} alt="hero background image">
                </div>
                <div class="car-it hero">
                    <img src={{asset('img/caro3.jpeg')}} alt="hero background image">
                </div> 
                <div class="car-it hero">
                    <img src={{asset('img/caro4.jpeg')}} alt="hero background image">
                </div>
                <div class="car-it hero">
                    <img src={{asset('img/caro5.jpeg')}} alt="hero background image">
                </div>
                <div class="car-it hero">
                    <img src={{asset('img/caro6.jpeg')}} alt="hero background image">
                </div>
                <div class="car-it hero">
                    <img src={{asset('img/caro7.jpeg')}} alt="hero background image">
                </div>
        
            </div>
        </div>
        <div class="center-glass">
            <h1>{{$title}}</h1>
            <p>
                experience The Home of Peace and Tourism
            </p>
            <button>
               <a href="/login">Book a Tour</a> 
            </button>
        </div>
    </div>

    <div class="facto">
        <div class="fact">
            <h2 style="padding:10px 0px 20px 60px; text-align:left">Special Offer</h2>
            <div class="section2" id="fact">
    
                <div class="centre"  height="400vh" width="100%">
                    <img height="400vh" width="100%">
                </div>
    
                <div class="percent" style="text-align: center">
                    <h1>26%</h1>
                        <p>
                            off on guided tours. Uncover the treasures of your destination with 
                            expert-guided tours that take you to the must see attractons, 
                            historical landmarks,and breath taking natural wonders. 
                            Immerse yourself in the local culture, taste authentic cousines 
                            and picture-perfect moments.
                        </p>
                </div>
                </div>
        </div>
    </div>

    <div class="section4">
        <h1 style="padding-top: 50px; text-align:center">Visit Exciting Destnations</h1>
        <div class="inside">
            <img src="{{asset('img/IMG_2025.JPG')}}" alt="img"> 
            <div class="actionplan">
                <ul>
                <li>Shere HIlls</li>
                <li>Wase Rocks</li>
                <li>Jos Wild life Park</li>
                <li>Kura Falls</li>
                <li>And lots more...</li>
                </ul>
            </div>
        
         </div>
    </div>
   
    
@endsection       
   
