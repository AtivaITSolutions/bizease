<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

       
<meta property="og:locale" content="en_US" key="og:locale" />
  <meta property="og:type" content="website" key="og:type" />
  <meta property="og:title" content="BizEase" key="og:title" />
  <meta property="og:description" content="BizEase." key="og:description" />
  <meta property="og:url" content="http://127.0.0.1:5501/index.html" key="og:url" />
  <meta property="og:site_name" content="BizEase" key="og:site_name" />
  <meta property="og:image" content="image" key="og:image" />
  <meta property="og:image:width" content="1200" key="og:image:width" />
  <meta property="og:image:height" content="628" key="og:image:height" />
  <meta property="og:image:type" content="image/png" key="og:image:type" />

  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-57x57.png')}}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-60x60.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-76x76.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-114x114.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-120x120.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-144x144.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-152x152.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-180x180.png')}}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('landing-page-assets/assets/images/favicon/android-icon-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing-page-assets/assets/images/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('landing-page-assets/assets/images/favicon/favicon-96x96.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing-page-assets/assets/images/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{ asset('landing-page-assets/assets/images/favicon/manifest.json')}}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">



  <link rel="preload" as="style" href="{{ asset('landing-page-assets/assets/style/bootstrap-style.min.css')}}" fetchpriority="high"
    onload="this.rel='stylesheet'" />
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css'> -->
  <link rel="preload" as="style" href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css'
    fetchpriority="high" onload="this.rel='stylesheet'" />
  <link rel="preload" as="style" href="{{ asset('landing-page-assets/assets/style/style.min.css')}}" fetchpriority="high"
    onload="this.rel='stylesheet'" />
  <link href="{{ asset('landing-page-assets/assets/style/custom.css')}}">
  
  <script src="{{ asset('landing-page-assets/lib/jquery/jquery.min.js')}}" fetchpriority="low"></script>
  <script src="{{ asset('landing-page-assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}" fetchpriority="low"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js' fetchpriority="low"></script>
  <script src="{{ asset('landing-page-assets/assets/scripts/script.js')}}" fetchpriority="low"></script>

    </head>

    <body>
        @include('layouts.landing.header')
        @include('layouts.landing.landing')    
        @include('layouts.landing.footer')    
    </body>
</html>