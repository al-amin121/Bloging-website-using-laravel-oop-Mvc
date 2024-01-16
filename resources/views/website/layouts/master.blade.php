<!DOCTYPE html>
<html>
<head>
 @include('website.include.head-links')
</head>

<body>

@include('website.include.navbar')

@yield('body')

@include('website.include.footer')

<!-- load JS files -->
@include('website.include.js')

</body>
</html>
