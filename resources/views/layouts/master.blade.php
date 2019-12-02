<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equip="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
    @yield('styles')
</head>
<body>
    <nav>Nav</nav>
        @yield('content')
    <footer>Footer</footer>

    @yield('script')
</body>
</html>