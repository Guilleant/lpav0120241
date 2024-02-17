<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ config('app.name', 'Mi Aplicación') }}
    </title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/font-awesome.min.css') }}">

    @stack('estilos')
</head>

<body>
    <header class="container">
        @include('layouts.navbar')
    </header>

    <main class="container" style="margin-top: 50px">
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    @stack('scriptsjs')
</body>

</html>
