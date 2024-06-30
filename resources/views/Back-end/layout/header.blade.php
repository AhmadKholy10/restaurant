<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title', 'Barista Cafe')</title>


        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
            
        <link href="{{ asset('Assets/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('Assets/css/vegas.min.css') }}" rel="stylesheet">

        <link href="{{ asset('Assets/css/tooplate-barista.css') }}" rel="stylesheet">
    </head>
    
    <body id="app">
                
            <main>
                
                <nav class="navbar navbar-expand-lg">                
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                            <img src="{{ asset('Assets/images/coffee-beans.png') }}" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
                            Barista
                        </a>
        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-lg-auto">
                                <li class="nav-item">
                                    @if(Request::is('/') || Request::is('section*'))
                                    <a class="nav-link click-scroll" href="/#section_1">Home</a>
                                    @else
                                    <a class="nav-link click-scroll" href="{{ route('home') }}/#section_1">Home</a>
                                    @endif
                                </li>

                                @if(Request::is('/') || Request::is('section*'))
                                <a class="nav-link click-scroll" href="/#section_2">About</a>
                                @else
                                <a class="nav-link click-scroll" href="{{ route('home') }}/#section_2">About</a>
                                @endif

                                @if(Request::is('/') || Request::is('section*'))
                                    <a class="nav-link click-scroll" href="/#section_3">Our Menu</a>
                                    @else
                                    <a class="nav-link click-scroll" href="{{ route('home') }}/#section_3">Our Menu</a>
                                @endif

                                @if(Request::is('/') || Request::is('section*'))
                                    <a class="nav-link click-scroll" href="/#section_4">Reviews</a>
                                    @else
                                    <a class="nav-link click-scroll" href="{{ route('home') }}/#section_4">Reviews</a>
                                @endif

                                @if(Request::is('/') || Request::is('section*'))
                                <a class="nav-link click-scroll" href="/#section_5">Contact_us</a>
                                @else
                                <a class="nav-link click-scroll" href="{{ route('home') }}/#section_5">Contact_us</a>
                                @endif
                            </ul>

                            <div class="ms-lg-3">
                                <!-- Update the href attribute to match the Vue Router path -->
                                <a href="{{ route('test') }}" class="btn custom-btn custom-border-btn">
                                    Reservation
                                    <i class="bi-arrow-up-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            
