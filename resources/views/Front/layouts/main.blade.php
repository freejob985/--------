<!DOCTYPE html>
<html lang="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('Front.Component.head');
<body class="loader">
    @include('Front.Component.com');
    @include('Front.Component.header');
    @include('Front.Component.nav');
    @yield('Main')
    @include('Front.Component.footer');
    @include('Front.Component.js');
</body>

</html>