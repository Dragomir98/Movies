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
        .navbar-brand {
            position: relative;
            font-size: 30px;
            background-size: contain;
        }
        .navbar-brand:hover
        {
            background-color: #5e5858;
            border-radius: 4px;
            transition: ease-in-out 0.15s;
        }

        *{font-family: Convergence;}

        body {
            background-color: #dcdee5;
        }

        th
        {
            background-color: #3864aa;
        }

        tr
        {
            background-color: #3e3f42;
            color: #ffffff;
            text-align: center;
            font-size: 23px;
        }

        a
        {
            font-size: 23px;
        }

        h1
        {
            padding-top: 50px;
        }

        h3
        {
            text-align: center;
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

        .indextable
        {
            color: #ffffff;
            width: 100%;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .showtd
        {
            background-color: #dcdee5;
        }

        .indextable td
        {
            background-color: #ceb690;
            color: #000000;
            text-align: center;
            font-size: 23px;
        }

        .indextable td:hover {
            background-color: #d8c5ad;
        }

        .idx
        {
            background: -webkit-linear-gradient(top, rgba(176,212,227,1) 0%,rgba(136,186,207,1) 100%);
            border: 1px solid #767a82;
            border-radius: 2px;
            margin: 20px;
            padding: 5px;
            width: 1000px;
            font-size: 23px;
        }

        .idx a
        {
            color: #14497f;
            font-size: 23px;
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

        .bighead
        {
            text-align: center;
        }

    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @include('include.navbar')
            <div class="container">
                <br>
                <br>
                <br>
                @include('include.messages')
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
