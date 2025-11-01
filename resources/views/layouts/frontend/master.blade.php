<!DOCTYPE html>
<html lang="en">

<head>


    @include('layouts.frontend.meta')
    @include('layouts.frontend.css')
    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
<div class="page-wrapper">
    @include('layouts.frontend.preheader')
    @include('layouts.frontend.header')


    @yield('content')
    @include('layouts.frontend.footer')

    @include('layouts.frontend.postfooter')
    </div>



    @include('layouts.frontend.script')
    @yield('script')
    @yield('js')

</body>

</html>
