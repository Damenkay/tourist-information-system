<nav class="navbar navbar-expand-lg sticky-top navbar-dark" 
style="background-color: hsl(192, 100%, 9%);">
<div class="container-fluid">
    <a href="/"><img src="{{asset('img/logo.PNG')}}" alt="logo" height="60px" class="logosfw"></a>    
{{-- <a class="navbar-brand mx-5" href="/" style="font-size: 24px">Skills<i style="font-size:32px; ">4</i>Wealth</a> --}}
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse d-flex" id="navbarNavAltMarkup">

<div class="nav-item mx-auto">
<a class="navbar-brand mx-5" href="/dashboard"><h1>{{Auth::user()->firstname}}'s Dashboard</h1></a>
</div>

<div class=" d-flex p-2">
<ul class="navbar-nav" style="padding-right: 80px">

<div class="logoutbtn">
    <a href="{{Route('logout')}}"><button onclick="return confirm('{{Auth::user()->firstname}}, are you sure you want to logout?')" class="logoutbtn">Logout</button></a>
{{-- <div class="dropdown-content">
<a href="{{Route('student.logout')}}">Logout</a>
</div> --}}
</div>
</ul>
</div>

</div>
</div>
</nav>
