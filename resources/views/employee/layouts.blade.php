<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="header_nav">
            @yield('employee.header')
        </div>
        <div class="main">
            @yield('content')
        </div>
        <div class="footer">
            @yield('employee.footer')
        </div>
    </body>
</html>
