<!DOCTYPE html>
<html lang="zh-TW">
<head>
    @include('include.meta')
    @yield('title')
    @include('include.style')
    @yield('style')
</head>
<body>
<div id="main">
    @yield('content')
</div>

</body>

@include('include.javacript')
@yield('javascript')
</html>
