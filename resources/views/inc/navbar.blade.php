<nav class="navbar navbar-expand-lg sticky-top navbar-dark"  id="navbarrr"
style="background-color: hsl(192, 100%, 9%);">
<div class="container-fluid">
    <a href="/"><img src="{{asset('img/logo.PNG')}}" alt="logo" height="60px" class="logosfw"></a>    
{{-- <a class="navbar-brand mx-5" href="/" style="font-size: 24px">Skills<i style="font-size:32px; ">4</i>Wealth</a> --}}
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse d-flex" id="navbarNavAltMarkup">

<div class="nav-item mx-auto">

<ul class="navbar-nav" id="myDIV">
<li class="nav-item me-5">
<a class="nav-link" href="/">Home</a>
</li>
<li class="nav-item me-5">
<a class="nav-link" href="/about">About Us</a>
</li>
<li class="nav-item me-5">
<a class="nav-link" href="/services">Services</a>
</li>
</ul>

</div>

<div class=" d-flex p-2">
<ul class="navbar-nav" style="padding-right: 80px">

<div class="dropdown">
<button class="dropbtn" style="margin-right: 40px;">Register</button>
<div class="dropdown-content">
<a href="/volunteer/register">Staff</a>
<a href="/student/register">Tourist</a>
</div>
</div>

<div class="dropdown">
<button class="dropbtn">Login</button>
<div class="dropdown-content">
<a href="/staff/login">Staff</a>
<a href="/tourist/login">Tourist</a>
</div>
</div>



</ul>
</div>

</div>
</div>

</nav>



