<header>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('/img/bemo-logo2.png')}}" height="100" width="167" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav navbar-right ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('welcome')}}">Main <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{route('contact-us')}}">Contact us</a>
        </li>
    </ul>
    </div>
</nav>
</header>