<!DOCTYPE html>
<html lang='ja'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="{{ asset('#') }}" href="style.css">
    </head>
    <body>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>