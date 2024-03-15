<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo">
                        <a href="#">
                            <div>Major</div>
                            <div>5 * Hotel</div>
                        </a>
                    </div>
                    <nav class="main_nav">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="rooms.html">Rooms</a></li>
                            @if(Auth::user())
                            <li><a href="news.html">Dashboard</a></li>
                            @else
                            <li><a href="{{ route('user.login') }}">Login</a></li>
                            @endif
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                        <div class="phone d-flex flex-row align-items-center justify-content-start"><i class="fa fa-phone" aria-hidden="true"></i><span>652-345 3222 11</span></div>
                        <div class="book_button trans_200"><a href="#">Book Now</a></div>
                    </div>
                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu">
    <div class="background_image" style="background-image:url({{ asset('frontend/images/menu.jpg') }})"></div>
    <div class="menu_content d-flex flex-column align-items-center justify-content-center">
        <ul class="menu_nav_list text-center">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About us</a></li>
            <li><a href="rooms.html">Rooms</a></li>
            @if(Auth::user())
            <li><a href="news.html">Dashboard</a></li>
            @else
            <li><a href="news.html">Login</a></li>
            @endif
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="menu_review"><a href="#">Book Now</a></div>
    </div>
</div>
