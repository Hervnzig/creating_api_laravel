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
@include('layouts.nav')
<hr>
    <div class="container">
        @yield('content')
        <input type = "submit" class="btn btn-success">
    </div>
    <footer>Footer</footer>

    @yield('script')
</body>
</html>