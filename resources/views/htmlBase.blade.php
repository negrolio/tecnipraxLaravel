<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-responsive.css">
    {{-- <link rel="stylesheet" href="css/nosotros.css"> --}}
    {{-- <link rel="stylesheet" href="css/ionicon/ionicons.css"> --}}
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/carousel.js" charset="utf-8"></script>
    <script src="js/main.js" charset="utf-8"></script>
    <title>Tecniprax</title>
  </head>
  <body>
    <div class="container">

    @include('header')
    @yield('containerPage')
    @include('footer')

    </div>
  </body>
</html>
