<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- LINKS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <!-- STYLES -->
        <link href="./css/app.css" rel="stylesheet">
        <link href="./fontawesome/css/all.css" rel="stylesheet">
        <style>
            .active {
                color: red;
                font-weight:bold;
            }
        </style>
    </head>
    <body>

        @include('layouts.partials.header')

        <div class="container">
            @yield('content')
        </div>

        @include('layouts.partials.footer')

    </body>
</html>