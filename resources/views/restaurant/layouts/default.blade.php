<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('restaurant.includes.header')
  </head>
  <body id="page-top">
    @include('restaurant.includes.navbar')
    @include('restaurant.includes.sidebar')

    @yield('content')

    @include('restaurant.includes/footer')
  </body>
</html>
