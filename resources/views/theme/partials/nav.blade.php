<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="@yield('home-active') nav-item"><a class="nav-link" href="{{ route('theme.home') }}">Home</a></li>
                <li class="@yield('shop-active') nav-item"><a class="nav-link" href="{{ route('theme.shop') }}">Shop</a></li>
                <li class="@yield('about-active') nav-item"><a class="nav-link" href="{{ route('theme.about') }}">About us</a></li>
                <li class="@yield('services-active') nav-item"><a class="nav-link" href="{{ route('theme.services') }}">Services</a></li>
                <li class="@yield('blog-active') nav-item"><a class="nav-link" href="{{ route('theme.blog') }}">Blog</a></li>
                <li class="@yield('contact-active') nav-item"><a class="nav-link" href="{{ route('theme.contact') }}">Contact us</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{ asset('site') }}/images/user.svg"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="{{ asset('site') }}/images/cart.svg"></a></li>
            </ul>
        </div>
    </div>
        
</nav>
<!-- End Header/Navigation -->