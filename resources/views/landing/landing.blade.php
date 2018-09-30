<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    {{-- Google font --}}
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	{{-- Bootstrap --}}
	<link type="text/css" rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" />

	{{-- Owl Carousel --}}
	<link type="text/css" rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('template/css/owl.theme.default.css') }}" />

	{{-- Magnific Popup --}}
	<link type="text/css" rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}" />

	{{-- Font Awesome Icon --}}
	<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">

	{{-- Custom stlylesheet --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('template/css/style.css') }}" />
    
    {{-- Overrides stlylesheet --}}
	<link type="text/css" rel="stylesheet" href="{{ asset('css/overrides.css') }}" />


</head>

<body>
    <div id="app">

        {{-- Header --}}
        <header id="home">
            {{-- Background Image --}}
            <div class="bg-img1">
                <div class="overlay"></div>
            </div>
            {{-- /Background Image --}}

            {{-- Nav --}}
            <nav id="nav" class="navbar nav-transparent">
                <div class="container">

                    <div class="navbar-header">
                        {{-- Logo --}}
                        <div class="navbar-brand">
                            <a href="index.html">
                                <img class="logo" src="{{ asset('template/img/logo.png') }}" alt="logo">
                                <img class="logo-alt" src="{{ asset('template/img/logo-alt.png') }}" alt="logo">
                            </a>
                        </div>
                        {{-- /Logo --}}

                        {{-- Collapse nav button --}}
                        <div class="nav-collapse">
                            <span></span>
                        </div>
                        {{-- /Collapse nav button --}}
                    </div>

                    {{--  Main navigation  --}}
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="#pricing">Advertising</a></li>
                        <li class="has-dropdown"><a href="#blog">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-single.html">blog post</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    {{-- /Main navigation --}}

                </div>
            </nav>
            {{-- /Nav --}}

            {{-- home wrapper --}}
            <div class="home-wrapper">
                <div class="container">
                    <div class="row">

                        {{-- home content --}}
                        <div class="col-md-10 col-md-offset-1">
                            <div class="home-content">
                                <h1 class="white-text">{{ config('app.name') }}</h1>
                                <p class="white-text">A place for travel team players, parents and coaches to connect and grow.
                                </p>
                                <button class="white-btn">Parents Login</button>
                                <button class="main-btn">Coaches Login</button>
                            </div>
                        </div>
                        {{-- /home content --}}

                    </div>
                </div>
            </div>
            {{-- /home wrapper --}}

        </header>
        {{-- /Header --}}

        {{-- About --}}
        <div id="about" class="section md-padding">

            {{-- Container --}}
            <div class="container">

                {{-- Row --}}
                <div class="row">

                    {{-- Section header --}}
                    <div class="section-header text-center">
                        <h2 class="title">Welcome!</h2>
                    </div>
                    {{-- /Section header --}}

                    {{-- about --}}
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset('template/img/about1.jpg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>Parents</h3>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc
                                    sed. Nunc non blandit massa enim nec.</p>
                                <a href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    {{-- /about --}}

                    {{-- about --}}
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset('template/img/about2.jpg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>Coaches</h3>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc
                                    sed. Nunc non blandit massa enim nec.</p>
                                <a href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    {{-- /about --}}

                    {{-- about --}}
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset('template/img/about3.jpg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>Advertisers</h3>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc
                                    sed. Nunc non blandit massa enim nec.</p>
                                <a href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    {{-- /about --}}

                </div>
                {{-- /Row --}}

            </div>
            {{-- /Container --}}

        </div>
        {{-- /About --}}


        {{-- Service --}}
        <div id="service" class="section md-padding">

            {{-- Container --}}
            <div class="container">

                {{-- Row --}}
                <div class="row">

                    {{-- Section header --}}
                    <div class="section-header text-center">
                        <h2 class="title">What we offer</h2>
                    </div>
                    {{-- /Section header --}}

                    {{-- service --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-diamond"></i>
                            <h3>App Development</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- /service --}}

                    {{-- service --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-rocket"></i>
                            <h3>Graphic Design</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- /service --}}

                    {{-- service --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-cogs"></i>
                            <h3>Creative Idea</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- /service --}}

                    {{-- service --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-diamond"></i>
                            <h3>Marketing</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- /service --}}

                    {{-- service --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-pencil"></i>
                            <h3>Awesome Support</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- /service --}}

                    {{-- service --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <i class="fa fa-flask"></i>
                            <h3>Brand Design</h3>
                            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- /service --}}

                </div>
                {{-- /Row --}}

            </div>
            {{-- /Container --}}

        </div>
        {{-- /Service --}}


        {{-- Numbers --}}
        <div id="numbers" class="section sm-padding">

            {{-- Background Image --}}
            <div class="bg-img2">
                <div class="overlay"></div>
            </div>
            {{-- /Background Image --}}

            {{-- Container --}}
            <div class="container">

                {{-- Row --}}
                <div class="row">

                    {{-- number --}}
                    <div class="col-sm-3 col-xs-6">
                        <div class="number">
                            <i class="fa fa-users"></i>
                            <h3 class="white-text"><span class="counter">451</span></h3>
                            <span class="white-text">Parent Members</span>
                        </div>
                    </div>
                    {{-- /number --}}

                    {{-- number --}}
                    <div class="col-sm-3 col-xs-6">
                        <div class="number">
                            <i class="fa fa-trophy"></i>
                            <h3 class="white-text"><span class="counter">12</span></h3>
                            <span class="white-text">Coach Members</span>
                        </div>
                    </div>
                    {{-- /number --}}

                    {{-- number --}}
                    <div class="col-sm-3 col-xs-6">
                        <div class="number">
                            <i class="fa fa-users"></i>
                            <h3 class="white-text"><span class="counter">45</span></h3>
                            <span class="white-text">Todays Visitors</span>
                        </div>
                    </div>
                    {{-- /number --}}
                    
                    {{-- number --}}
                    <div class="col-sm-3 col-xs-6">
                        <div class="number">
                            <i class="fa fa-file"></i>
                            <h3 class="white-text"><span class="counter">154</span>K</h3>
                            <span class="white-text">Site Posts</span>
                        </div>
                    </div>
                    {{-- /number --}}

                </div>
                {{-- /Row --}}

            </div>
            {{-- /Container --}}

        </div>
        {{-- /Numbers --}}

        {{-- Pricing --}}
        <div id="pricing" class="section md-padding">

            {{-- Container --}}
            <div class="container">

                {{-- Row --}}
                <div class="row">

                    {{-- Section header --}}
                    <div class="section-header text-center">
                        <h2 class="title">Advertisement Pricing</h2>
                    </div>
                    {{-- /Section header --}}

                    {{-- pricing --}}
                    <div class="col-sm-4">
                        <div class="pricing">
                            <div class="price-head">
                                <span class="price-title">Basic plan</span>
                                <div class="price">
                                    <h3>$9<span class="duration">/ month</span></h3>
                                </div>
                            </div>
                            <ul class="price-content">
                                <li>
                                    <p>1GB Disk Space</p>
                                </li>
                                <li>
                                    <p>100 Email Account</p>
                                </li>
                                <li>
                                    <p>24/24 Support</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <button class="outline-btn">Purchase now</button>
                            </div>
                        </div>
                    </div>
                    {{-- /pricing --}}

                    {{-- pricing --}}
                    <div class="col-sm-4">
                        <div class="pricing">
                            <div class="price-head">
                                <span class="price-title">Silver plan</span>
                                <div class="price">
                                    <h3>$19<span class="duration">/ month</span></h3>
                                </div>
                            </div>
                            <ul class="price-content">
                                <li>
                                    <p>1GB Disk Space</p>
                                </li>
                                <li>
                                    <p>100 Email Account</p>
                                </li>
                                <li>
                                    <p>24/24 Support</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <button class="outline-btn">Purchase now</button>
                            </div>
                        </div>
                    </div>
                    {{-- /pricing --}}

                    {{-- pricing --}}
                    <div class="col-sm-4">
                        <div class="pricing">
                            <div class="price-head">
                                <span class="price-title">Gold plan</span>
                                <div class="price">
                                    <h3>$39<span class="duration">/ month</span></h3>
                                </div>
                            </div>
                            <ul class="price-content">
                                <li>
                                    <p>1GB Disk Space</p>
                                </li>
                                <li>
                                    <p>100 Email Account</p>
                                </li>
                                <li>
                                    <p>24/24 Support</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <button class="outline-btn">Purchase now</button>
                            </div>
                        </div>
                    </div>
                    {{-- /pricing --}}

                </div>
                {{-- Row --}}

            </div>
            {{-- /Container --}}

        </div>
        {{-- /Pricing --}}


        {{-- Testimonial --}}
        <div id="testimonial" class="section md-padding">

            {{-- Background Image --}}
            <div class="bg-img3">
                <div class="overlay"></div>
            </div>
            {{-- /Background Image --}}

            {{-- Container --}}
            <div class="container">

                {{-- Row --}}
                <div class="row">

                    {{-- Testimonial slider --}}
                    <div class="col-md-10 col-md-offset-1">
                        <div id="testimonial-slider" class="owl-carousel owl-theme">

                            {{-- testimonial --}}
                            <div class="testimonial">
                                <div class="testimonial-meta">
                                    <img src="{{ asset('template/img/perso1.jpg') }}" alt="">
                                    <h3 class="white-text">John Doe</h3>
                                    <span>Web Designer</span>
                                </div>
                                <p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in
                                    dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris.</p>
                            </div>
                            {{-- /testimonial --}}

                            {{-- testimonial --}}
                            <div class="testimonial">
                                <div class="testimonial-meta">
                                    <img src="{{ asset('template/img/perso2.jpg') }}" alt="">
                                    <h3 class="white-text">John Doe</h3>
                                    <span>Web Designer</span>
                                </div>
                                <p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in
                                    dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris.</p>
                            </div>
                            {{-- /testimonial --}}

                        </div>
                    </div>
                    {{-- /Testimonial slider --}}

                </div>
                {{-- /Row --}}

            </div>
            {{-- /Container --}}

        </div>
        {{-- /Testimonial --}}

        {{-- Blog --}}
        <div id="blog" class="section md-padding bg-grey">

            {{-- Container --}}
            <div class="container">

                {{-- Row --}}
                <div class="row">

                    {{-- Section header --}}
                    <div class="section-header text-center">
                        <h2 class="title">Recents Site News</h2>
                    </div>
                    {{-- /Section header --}}

                    {{-- blog --}}
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset('template/img/blog1.jpg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i>John doe</li>
                                    <li><i class="fa fa-clock-o"></i>18 Oct</li>
                                    <li><i class="fa fa-comments"></i>57</li>
                                </ul>
                                <h3>Molestie at elementum eu facilisis sed odio</h3>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc
                                    sed. Nunc non blandit massa enim nec.</p>
                                <a href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    {{-- /blog --}}

                    {{-- blog --}}
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset('template/img/blog2.jpg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i>John doe</li>
                                    <li><i class="fa fa-clock-o"></i>18 Oct</li>
                                    <li><i class="fa fa-comments"></i>57</li>
                                </ul>
                                <h3>Molestie at elementum eu facilisis sed odio</h3>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc
                                    sed. Nunc non blandit massa enim nec.</p>
                                <a href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    {{-- /blog --}}

                    {{-- blog --}}
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset('template/img/blog3.jpg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i>John doe</li>
                                    <li><i class="fa fa-clock-o"></i>18 Oct</li>
                                    <li><i class="fa fa-comments"></i>57</li>
                                </ul>
                                <h3>Molestie at elementum eu facilisis sed odio</h3>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc
                                    sed. Nunc non blandit massa enim nec.</p>
                                <a href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    {{-- /blog --}}

                </div>
                {{-- /Row --}}

            </div>
            {{-- /Container --}}

        </div>
        {{-- /Blog --}}

        {{-- Contact --}}
        <div id="contact" class="section md-padding">

            {{-- Container --}}
            <div class="container">

                {{-- Row --}}
                <div class="row">

                    {{-- Section-header --}}
                    <div class="section-header text-center">
                        <h2 class="title">Get in touch</h2>
                    </div>
                    {{-- /Section-header --}}

                    {{-- contact form --}}
                    <div class="col-md-8 col-md-offset-2">
                        <form class="contact-form">
                            <input type="text" class="input" placeholder="Name">
                            <input type="email" class="input" placeholder="Email">
                            <input type="text" class="input" placeholder="Subject">
                            <textarea class="input" placeholder="Message"></textarea>
                            <button class="main-btn">Send message</button>
                        </form>
                    </div>
                    {{-- /contact form --}}

                </div>
                {{-- /Row --}}

            </div>
            {{-- /Container --}}

        </div>
        {{-- /Contact --}}


        {{-- Footer --}}
        <footer id="footer" class="sm-padding bg-dark">

            {{-- Container --}}
            <div class="container">

                {{-- Row --}}
                <div class="row">

                    <div class="col-md-12">

                        {{-- footer logo --}}
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('template/img/logo-alt.png') }}" alt="logo"></a>
                        </div>
                        {{-- /footer logo --}}

                        {{-- footer follow --}}
                        <ul class="footer-follow">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        {{-- /footer follow --}}

                        {{-- footer copyright --}}
                        <div class="footer-copyright">
                            <p>Copyright © 2018. All Rights Reserved. Designed by Termialogic Solutions</p>
                            <p class="template-link text-muted">Site template by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                        {{-- /footer copyright --}}

                    </div>

                </div>
                {{-- /Row --}}

            </div>
            {{-- /Container --}}

        </footer>
        {{-- /Footer --}}

        {{-- Back to top --}}
        <div id="back-to-top"></div>
        {{-- /Back to top --}}

        {{-- Preloader --}}
        {{-- <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> --}}
        {{-- /Preloader --}}

    </div>
    {{-- jQuery Plugins --}}
    <script type="text/javascript" src="{{ asset('template/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/jquery.magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>
