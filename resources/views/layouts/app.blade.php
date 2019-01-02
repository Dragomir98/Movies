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
        *{font-family: Convergence;}

        h1
        {
            padding-top: 40px;
        }

        small
        {
            color: #494a4c;
        }

        .cont
        {
            float: right;
        }

        .resp
        {
            border-radius: 5px;
            width: 100%;
            max-width: 300px;
            height: auto;
        }

        .idx
        {
            background: -webkit-linear-gradient(top, rgba(176,212,227,1) 0%,rgba(136,186,207,1) 100%);
            border: 1px solid #767a82;
            border-radius: 2px;
            margin: 20px;
            padding: 5px;
            width: 1000px;
        }

        .idx a
        {
            color: #14497f;
            font-size: 20px;
            font-weight:bold;
            text-decoration:none;
        }

        .idx a:hover
        {
            color: #404244;
            transition: 0.15s ease-in-out;
            text-decoration:none;
        }
        .idx small
        {
            position: absolute;
            bottom: 8px;
            float: right;
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
