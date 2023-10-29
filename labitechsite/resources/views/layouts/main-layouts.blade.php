<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/img/logo.svg') }}" rel="icon">
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/30c68318e6.js" crossorigin="anonymous"></script>
</head>

<body>
    {{-- Top Navbar --}}
    @include('layouts.partials.topnavbar')
    {{-- Navbar --}}
    @if(!($title === "Home"))
        @include('layouts.partials.navbar')
    @endif

    {{-- isi --}}
    <section class="mainsection">
        @yield('section')
    </section>

    {{-- Footer --}}
    @include('layouts.partials.footer')
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @if($title === "Home")
        <script src="{{ asset('assets/js/spc.js') }}"></script>
    @endif
    @if (!($title === "Home"))
        <script src="{{ asset('assets/js/spc2.js') }}"></script>
    @endif
</body>

</html>
