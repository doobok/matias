<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('main.layouts.partials.head')
@yield('head')
</head>
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
<div id="app">
@include('main.layouts.partials.navbar')

@include('main.layouts.partials.in-dev')

<div class="bg-white bg-right-top bg-no-repeat bg-100 lg:bg-50 bg-right-multigons">
@yield('content')
</div>

@include('main.layouts.partials.footer')

</div>
@include('main.layouts.partials.js')
@yield('js')
</body>
</html>
