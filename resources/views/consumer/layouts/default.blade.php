<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('consumer.includes.header')
  </head>
  <body id="page-top">
    @include('consumer.includes.navbar')
    @include('consumer.includes.sidebar')

    @yield('content')

    @include('consumer.includes/footer')
  </body>
</html>
