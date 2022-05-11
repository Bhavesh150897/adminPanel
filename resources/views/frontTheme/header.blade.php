<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ route('landingPage') }}"><span>Sona</span>gra</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a href="{{ route('landingPage') }}">Home</a></li>
              <li><a href="{{ route('blog.cat','php') }}">PHP</a></li>
              <li><a href="{{ route('blog.cat','laravel-9') }}">Laravel 9</a></li>
              <li><a href="{{ route('blog.cat','jquery') }}">jQuery</a></li>
              <li><a href="{{ route('blog.cat','codeigniter-4') }}">Codeigniter 4</a></li>
              <li><a href="{{ route('blog.categories') }}">Category</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <div class="header-social-links d-flex">
            <a href="{{ $frontSettings['twitter-link'] }}" class="twitter"><i class="bu bi-twitter"></i></a>
            <a href="{{ $frontSettings['facebook-link'] }}" class="facebook"><i class="bu bi-facebook"></i></a>
            <a href="{{ $frontSettings['linked-in-link'] }}" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>
    </div>
</header><!-- End Header -->