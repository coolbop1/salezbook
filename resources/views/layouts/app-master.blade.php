<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="{!! url('assets/bootstrap/js/jquery.min.js') !!}"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.min.js') !!}"></script> -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{!! url('assets/lib/flaticon/font/flaticon.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/lib/animate/animate.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/lib/owlcarousel/assets/owl.carousel.min.css') !!}" rel="stylesheet">
    
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/style.css') !!}" rel="stylesheet">

</head>
<body>
    @include('layouts.partials.navbar')

    <main class="container_">
        @yield('content')
    </main>

    <!-- <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> -->
       @include('layouts.partials.footer')
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="{!! url('assets/lib/easing/easing.min.js') !!}"></script>
  <script src="{!! url('assets/lib/owlcarousel/owl.carousel.min.js') !!}"></script>
  <script src="{!! url('assets/lib/waypoints/waypoints.min.js') !!}"></script>
  <script src="{!! url('assets/lib/counterup/counterup.min.js') !!}"></script>
  <script src="{!! url('assets/lib/parallax/parallax.min.js') !!}"></script>
  <script src="{!! url('assets/js/main.js') !!}"></script>
</html>