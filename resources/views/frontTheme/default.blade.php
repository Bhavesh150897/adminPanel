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
    <style type="text/css">
        .custom-btn{
            background: #F8F9F4;
            border-radius: 999px;
            box-shadow: #F8F9F4 0 10px 20px -10px;
            box-sizing: border-box;
            color: #1BBD36;
            cursor: pointer;
            font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            opacity: 1;
            outline: 0 solid transparent;
            padding: 8px 18px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: fit-content;
            word-break: break-word;
            border: 0;
        }
        .about-us-web{
            position: relative;
            top: 80px;
        }
    </style>
  @include('frontTheme.style')
  @yield('style')
</head>
<body>
    @include('frontTheme.header')

    <!-- ======= Breadcrumbs ======= -->
    <main id="main">
        
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