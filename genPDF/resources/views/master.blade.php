<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
 
      <div class="container"> 
        <img src="{{asset('assets/slip.jpg')}}" style="width: 600;">
        <div class="top-left" style="width: 500;">@yield('content')</div>
      </div>
  </body>
</html>