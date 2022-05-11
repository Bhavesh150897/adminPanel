<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{!! !empty($frontSettings['site-favicon']) ? route('image.asset.storage.file',['folder' => 'site-logos', 'file' => $frontSettings['site-favicon']]) : '' !!}" sizes="16x16"/>
    <title>@yield('title') - Sonagra.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    <meta content="{{ $frontSettings['facebook-link'] }}" property='article:publisher'/>
    <meta content="{{ $frontSettings['facebook-link'] }}" property='article:author'/>
    <meta content='Bhavesh Sonagra' name='author'/>
    {!! Twitter::generate() !!}
    <script type="text/javascript">
    var current_page_url = "<?php echo URL::full(); ?>";
    var rn = "<?php echo Route::currentRouteName(); ?>";
    </script>
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