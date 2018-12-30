<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        h1
        {
            padding-top: 30px;
        }

        a
        {
            color: #2b2c2d;
        }

        .well
        {
            background: -webkit-linear-gradient(top, #ebf1f6 0%,#abd3ee 50%,#89c3eb 51%,#d5ebfb 100%);
            border: 2px solid #5b5e63;
            border-radius: 3px;
            margin: 20px;
            padding: 5px;
        }

    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @include('include.navbar')
            <div class="container">
                @include('include.messages')
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
