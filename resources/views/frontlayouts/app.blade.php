<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Amatta</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css/bootstrap.css') }}" />

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/front/css/all.css') }}" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Montserrat:wght@200;400;600;800&display=swap"
        rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" href="{{ asset('/front/img/logo/title2.png') }}">
</head>

<body>

    <!-- Navbar -->
    @include('frontlayouts.navbar')
    <!-- Navbar End -->
    @yield('content')
    <!-- Corousel -->

    <!-- Footer -->
    @include('frontlayouts.footer')
    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{ asset('/front/js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2.4.4/dist/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js "></script>
    <script src="{{ asset('/front/js/bootstrap.js') }} "></script>
    <script src="{{ asset('/front/js/all.js') }} "></script>
    @stack('script')
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->

</body>

</html>
