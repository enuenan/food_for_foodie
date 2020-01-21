<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('website.includes.header')
</head>
<body>
@include('website.includes.navbar')

@yield('content')

@include('website.includes.modal')
@include('website.includes.footer')
</body>
</html>
