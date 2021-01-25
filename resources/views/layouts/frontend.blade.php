<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themeenergy.com">
    <title>Travels - Nepal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styler.css" />
    <link rel="stylesheet" href="/css/theme-pink.css" id="template-color" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/css/jquery-ui.theme.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/animate.css" />
    <link rel="stylesheet" href="/css/icon.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet'
        type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
    <!-- Preloader -->
    <div class="preloader">
        <div id="followingBallsG">
            <div id="followingBallsG_1" class="followingBallsG"></div>
            <div id="followingBallsG_2" class="followingBallsG"></div>
            <div id="followingBallsG_3" class="followingBallsG"></div>
            <div id="followingBallsG_4" class="followingBallsG"></div>
        </div>
    </div>
    <!-- //Preloader -->

    <!-- Header -->
    <header class="header" role="banner">
        <div class="wrap">
            <!-- Logo -->
            <div class="logo">
                <a href="/" title="Travels Nepal"><img src="/images/micro2.jpg" style="height: 60px;" alt="Travels Nepal" /></a>
                <span id="logo-text">TRAVELS NEPAL</span>
            </div>
            <!-- //Logo -->
            <style>
                @import url('https://fonts.googleapis.com/css?family=Pacifico');
                #logo-text{
                    font-family: 'Pacifico';
                    letter-spacing: 6px;
                    font-size: 1rem;
                }
            </style> 
            <!-- Main Nav -->
            <nav role="navigation" class="main-nav">
                <ul>
                    <li class="active"><a href="/" title="">Home</a></li>
                    @auth
                    <li><a href="/reserve" title="Contact">Book A Ticket</a></li>
                    <li><a href="/mytickets" title="Tickets">My Tickets</a></li>
                        @if (Auth::user()->only(['isAdmin'])['isAdmin'] == 1)
                            <li><a href="/dashboard" title="Contact">Dashboard</a></li>
                        @else
                            
                                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                </li>
                        @endif
                    @endauth
                    <li><a href="/contact" title="Contact">Contact</a></li>
                    @if (!Auth::user())
                        <li><a href="/login" title="Login">Login</a></li>
                        <li><a href="/register" title="Register">Register</a></li>
                    @endif
                </ul>
            </nav>
            <!-- //Main Nav -->
        </div>
    </header>
    <!-- //Header -->
    <main class="main" role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer black" role="contentinfo">
        <div class="wrap">
            <div class="row">
                <!-- Column -->
                <article class="one-half">
                    <h6>About us</h6>
                    <p> We Travels Nepal provides you the Hiace services where you can travel from kathmandu to Biratnagar
                       through the Sinduli Highway within 7-8 hours.It is one of the shorest way to travel incomparision to another way by bus.We provide our best services to you.</p>
                </article>
                <!-- //Column -->

                <!-- Column -->
                <article class="one-fourth">
                    <h6>Need help?</h6>
                    <p>Contact us via phone or email:</p>
                    <p class="contact-data"><span class="icon icon-themeenergy_call"></span> 01-554300</p>
                    <p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="">help@travelsnepal.com</a></p>
                </article>
                <!-- //Column -->

                <!-- Column -->
                <article class="one-fourth">
                    <h6>Follow us</h6>
                    <ul class="social">
                        <li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
                        <li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                        <li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
                        <li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
                        <li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
                        <li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
                    </ul>
                </article>
                <!-- //Column -->
            </div>

            <div class="copy">
                <p>Copyright 2019, Travels Nepal. All rights reserved. </p>

                <nav role="navigation" class="foot-nav">
                    <ul>
                        <li><a href="#" title="Home">Home</a></li>
                        <li><a href="#" title="About us">About us</a></li>
                        <li><a href="#" title="Contact us">Contact us</a></li>
                        <li><a href="#" title="Terms of use">Terms of use</a></li>
                        <li><a href="#" title="Help">Help</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- //Footer -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="/js/jquery.uniform.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery-ui-sliderAccess.js"></script>
    <script src="/js/search.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/js/styler.js"></script>
</body>
</html>
