<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHOP</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    {{ View ::make('header')}}
    @yield('content')
    {{ View ::make('footer')}}
    
  </body>
</html>