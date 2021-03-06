<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontello/css/facebook-icon.css" charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style-responsive.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    <script src="/js/app.js" charset="utf-8"></script>
    <script src="/js/carousel.js" charset="utf-8"></script>
    <script src="/js/main.js" charset="utf-8"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrUYlD0y7Qf95Ap7mpoJHsQfKOqWHwpjo&callback=initMap">
    </script>
    <title>@yield('title','Tecniprax')</title>
  </head>
  <body>
    <div class="container">

    @include('header')
    @yield('containerPage')
    @include('footer')

    </div>
  </body>
</html>
