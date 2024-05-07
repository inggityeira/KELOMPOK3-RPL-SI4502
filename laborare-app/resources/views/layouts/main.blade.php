<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>

    <style>
        body{
            margin: 0%;
            padding: 0%;
            background-color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: white;
        }
        #main-content {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .nav-link.active {
            text-decoration: underline;
        }
        
        .breadcrumb-item+.breadcrumb-item::before {
            color: white;
            font-size: 15px;
            margin-top:5px;
        }
    </style>

    @stack('css')
</head>

<body>

    <section id="main-content">
        @include('layouts.navbar')

        @yield('content')
    </section>

    <br>

    @include('layouts.footer')
</body>
</html>
