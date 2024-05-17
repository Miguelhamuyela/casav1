<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>  FH-UAN  - @yield('titulo')</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/site/assets/img/favicon-uan.png" rel="icon">
  <link href="/site/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/site/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="/site/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/site/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/site/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="/site/assets/css/style.css" rel="stylesheet">

    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>


     @include('extra._translate.index')

    {!! RecaptchaV3::initJs() !!}

    @yield('CSSJS')
    @yield('CSS')
</head>

<body>
