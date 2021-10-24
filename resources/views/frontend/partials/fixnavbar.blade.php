<ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
    <li class="icon-box {{ Route::currentRouteNamed('homepage') ? 'active' : '' }}">
        <i class="fa fa-home"></i>
        <a href="{{route('homepage')}}">
            <h2>Home</h2>
        </a>
    </li>
    <li class="icon-box {{ Route::currentRouteNamed('home.about') ? 'active' : '' }}">
        <i class="fa fa-user"></i>
        <a href="{{route('home.about')}}">
            <h2>About</h2>
        </a>
    </li>
    <li class="icon-box {{ Route::currentRouteNamed('home.portfolio') ? 'active' : '' }}">
        <i class="fa fa-briefcase"></i>
        <a href="{{route('home.portfolio')}}">
            <h2>Portfolio</h2>
        </a>
    </li>
    <li class="icon-box {{ Route::currentRouteNamed('home.contact') ? 'active' : '' }}">
        <i class="fa fa-envelope-open"></i>
        <a href="{{route('home.contact')}}">
            <h2>Contact</h2>
        </a>
    </li>
    <li class="icon-box">
        <i class="fa fa-comments"></i>
        <a href="blog.html">
            <h2>Blog</h2>
        </a>
    </li>
</ul>
