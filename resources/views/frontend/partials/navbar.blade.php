<div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul class="list-unstyled" id="menu">
        <li class="{{ Route::currentRouteNamed('homepage') ? 'active' : '' }}"><a href="{{route('homepage')}}"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li class="{{ Route::currentRouteNamed('home.about') ? 'active' : '' }}" ><a href="{{route('home.about')}}"><i class="fa fa-user"></i><span>About</span></a></li>
        <li class="{{ Route::currentRouteNamed('home.poerfolio') ? 'active' : '' }}" ><a href="{{route('home.portfolio')}}"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
        <li class="{{ Route::currentRouteNamed('home.contact') ? 'active' : '' }}" ><a href="{{route('home.contact')}}"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
    
    </ul>
</div>
