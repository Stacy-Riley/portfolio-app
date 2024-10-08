{{--    Admin Layout--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Created By Stacy') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->

    </head>

    <body>
        @yield('admin_custom_styles')
        @include('partials.assets.admin_styles')

        <!-- Page Content -->
        <main>
            @include('partials.admin.sidebar')
            @yield('content')
        </main>

        @include('partials.assets.admin_scripts')
        @yield('admin_custom_scripts')

    </body>
</html>
