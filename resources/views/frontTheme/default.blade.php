<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title') - Sonagra.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('frontTheme.style')
  @yield('style')
</head>
<body>
    @include('frontTheme.header')

    <!-- ======= Breadcrumbs ======= -->
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">

            <div class="justify-content-between align-items-center">
              <h2 class="text-dark">SONA<span class="text-light">GRA</span></h2>
              <p class="text-light">Sonagra specifically for sharing programming issue and examples. We’ll be sharing some chunks of codes of PHP, Laravel Framework, CSS3, HTML5, MYSQL, Bootstrap, CodeIgniter Framework, JQuery, Javascript, Server, Ionic Framework etc. In our site i am sure you will find something good solution and find example of topics of PHP, Laravel etc.</p>
            </div>

          </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            @yield('content')
        </section>


    </main><!-- End #main -->
    @include('frontTheme.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('frontTheme.script')
</body>
</html>