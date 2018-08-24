<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-R Real Estate</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="/css/app.css">

    <link rel="shortcut icon" href="{{{ asset('logo.png') }}}">
  </head>
  <body>

    @include('inc.navbar')

<div class="full-width-div">
  <!--@if(Request::is('/'))
  @include('inc.showcase')
  @endif-->
            <br>
            @include('inc.messages')

            @yield('content')

</div>


<footer id="footer" class="text-muted text-centered">
  <div class="container">

    <p align="center">E-R 2018  &copy; Powered by Laravel</p>
  <!--  <p align="center">New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>-->
  </div>
</footer>


  </body>
</html>
