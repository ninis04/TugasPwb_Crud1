<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}">
    <title>@yield('title')</title></title>
  </head>

  <body style="overflow-x: hidden !important">
 
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav">
  <div class="container">
  <a class="text-light luna font-weight-bold" "navbar-brand" href="#"><img src="{{ url ('img/8.png') }}" height="60px" width="60px"  > Bali Island</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active"  href="{{ url ('/index')}}"><b>Home</b></a>
      <a class="nav-item nav-link" href="{{ url ('/fasilitas')}}"><b>Fasilitas</b></a>
      <a class="nav-item nav-link" href="{{ url ('/gallery')}}"><b>Galerry</b></a>
      <a class="nav-item nav-link" href="{{ url ('/informasi')}}"><b>Informasi</b></a>
    </div>
  </div>
  </div>  
</nav>

   @yield('container')

   

   

   

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{url('js/script.js')}}"></script>
  </body>
</html>