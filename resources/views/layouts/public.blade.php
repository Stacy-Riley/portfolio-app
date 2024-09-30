<html lang="en">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Created By Stacy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('partials.assets.guest_styles')

<div class="erling_tm_all_wrap w-full h-auto clear-both relative">
    @include('partials.navbar')

    <div class="erling_tm_mainpart w-full pl-[400px] large:pl-[300px] middle:pl-0">
        @yield('content')
    </div>

</div>

@include('partials.assets.guest_scripts')
@yield('custom_scripts')
@yield('scripts')
</body>
</html>
