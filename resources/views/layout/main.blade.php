<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css'); }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css'); }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css'); }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css'); }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css'); }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css'); }}">
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css'); }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css'); }}">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css'); }}">
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap" id="home-section">
            <!-- mobile menu -->
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>
            <!-- mobile menu -->

            <header class="site-navbar site-navbar-target" role="banner">
                <div class="container">
                  <div class="row align-items-center position-relative">
            
                    <div class="col-3 ">
                      <div class="site-logo">
                        <a href="{{ URL::to('/'); }}" class="font-weight-bold">
                          <img src="{{ asset('images/logo.png'); }}" alt="Image" class="img-fluid">
                        </a>
                      </div>
                    </div>        
                    <div class="col-9 text-right">                  
                        <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li>
                                    <form action="{{ URL::route('search'); }}" method="GET">
                                        <div class="input-group" style="width: 400px;">
                                            <input type="text" name="q" class="form-control" placeholder="Search" />
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="submit">Go</button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ URL::to('/'); }}" class="nav-link">Home</a></li>
                                <li class="{{ (request()->is('posts')) ? 'active' : '' }}"><a href="{{ URL::route('blog'); }}" class="nav-link">Blog</a></li>
                                @auth
                                {{-- <li>
                                    <span class="font-bold uppercase">
                                    Welcome {{auth()->user()->name}}
                                    </span>
                                </li> --}}
                                <li class="{{ (request()->is('posts/manage')) ? 'active' : '' }}">
                                    <a href="/posts/manage" class="hover:text-laravel">Manage Posts</a>
                                </li>
                                <li>
                                    <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" style="border:1px solid #4179a9; padding:2px 5px; background:#2b5b84; color:#ffffff; border-radius:4px;">Logout</button>
                                    </form>
                                </li>
                                @else
                                <li class="{{ (request()->is('register')) ? 'active' : '' }}">
                                    <a href="/register" class="nav-link">Register</a>
                                </li>
                                <li class="{{ (request()->is('login')) ? 'active' : '' }}">
                                    <a href="/login" class="nav-link">Login</a>
                                </li>
                                @endauth
                                
                                {{-- <li><a href="contact.html" class="nav-link">Contact</a></li> --}}
                            </ul>
                      </nav>
                    </div>                  
                  </div>
                </div>        
            </header>
            @yield('content')
            <footer class="site-footer bg-light">
                <div class="container">
                    
                    <div class="row text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved.</p>
                        </div>
                    </div>
            
                    </div>
                </div>
            </footer>
        </div>
        <x-flash-message />

        <script src="{{ URL::asset('js/jquery-3.3.1.min.js'); }}"></script>
        <script src="{{ URL::asset('js/jquery-migrate-3.0.0.js'); }}"></script>
        <script src="{{ URL::asset('js/popper.min.js'); }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js'); }}"></script>
        <script src="{{ URL::asset('js/owl.carousel.min.js'); }}"></script>
        <script src="{{ URL::asset('js/jquery.sticky.js'); }}"></script>
        <script src="{{ URL::asset('js/jquery.waypoints.min.js'); }}"></script>
        <script src="{{ URL::asset('js/jquery.animateNumber.min.js'); }}"></script>
        <script src="{{ URL::asset('js/jquery.fancybox.min.js'); }}"></script>
        <script src="{{ URL::asset('js/jquery.stellar.min.js'); }}"></script>
        <script src="{{ URL::asset('js/jquery.easing.1.3.js'); }}"></script>
        <script src="{{ URL::asset('js/bootstrap-datepicker.min.js'); }}"></script>
        <script src="{{ URL::asset('js/isotope.pkgd.min.js'); }}"></script>
        <script src="{{ URL::asset('js/aos.js'); }}"></script>
        <script src="{{ URL::asset('js/main.js'); }}"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
    </body>
</html>
