<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>

    <nav class="canvas-menu mobile-menu">
        <ul>
            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
            <li class="{{ request()->is('classes') ? 'active' : '' }}" ><a href="{{ route('classes') }}">Classes</a></li>
            <li class="{{ request()->is('services') ? 'services' : '' }}"><a href="{{ route('services') }}">Services</a></li>
            <li class="{{ request()->is('team') ? 'team' : '' }}"><a href="{{ route('team') }}">Our Team</a></li>
            <li class="{{ request()->routeIs('class-timetable') || request()->routeIs('gallery') || request()->routeIs('blog') ? 'active' : '' }}"><a href="#">Gym Info</a>
                <ul class="dropdown">
                    <li><a href="{{route('class-timetable')}}">Classes timetable</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('blog')}}">Our blog</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="canvas-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->
<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="{{ route('welcome') }}">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('welcome') }}">Home</a></li>
                        <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="{{ request()->is('classes') ? 'active' : '' }}"><a href="{{ route('classes') }}">Classes</a></li>
                        <li class="{{ request()->is('services') ? 'active' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                        <li class="{{ request()->is('team') ? 'active' : '' }}"><a href="{{ route('team') }}">Our Team</a></li>
                        <li class="{{ request()->routeIs('class-timetable') || request()->routeIs('gallery') || request()->routeIs('blog') ? 'active' : '' }}"><a href="#">Gym Info</a>
                            <ul class="dropdown">
                                <li><a href="{{route('class-timetable')}}">Classes timetable</a></li>
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
                                <li><a href="{{route('blog')}}">Our blog</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->
