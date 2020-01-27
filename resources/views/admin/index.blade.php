<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="/css/admin.css" />
        @stack('styles')
    </head>
    <body>
        @yield('body')

        @stack('scripts')
    </body>
</html>
