<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-R Real Estate</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="/css/app.css">

    <link rel="shortcut icon" href="{{{ asset('logo.png') }}}">
  </head>
  <style>
  @media (max-width: 40em) {

    .element {
    display: none;
    }


  }
  @media only screen and( -webkit-min-device-pixel-ratio: 1.25 ),
       only screen and(      -o-min-device-pixel-ratio: 5/4 ),
       only screen and( min-resolution: 120dpi ),
       only screen and( min-resolution: 1.25dppx ) {
    body {
        font-size: 1rem;
    }
}

  </style>
  <body>

    @include('inc.navbar')

<div class="container">
  <!--@if(Request::is('/'))
  @include('inc.showcase')
  @endif-->
    <div class="row">

      <div class="col-md-8 col-lg-8 col-sm 8">
            <br>
            @include('inc.messages')

            @yield('content')
      </div>

      <div class="col-md-4 col-md-4 col-sm-4">
        <br>
            @include('inc.sidebar')
      </div>


    </div>


</div>



<div class="element">
    <footer id="footer" class="text-muted text-centered">
      <div class="container">

        <p align="center">E-R 2018  &copy; Powered by Laravel</p>
      <!--  <p align="center">New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>-->
      </div>
    </footer>
</div>

  </body>
</html>
