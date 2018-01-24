<!DOCTYPE html>
<html>
<head>
@include('frontend.include.csslink')
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
@include('frontend.include.header')
@yield('content')
@include('frontend.include.footer')
@include('frontend.include.scripting');

</body>

</html>