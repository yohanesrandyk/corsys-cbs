<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="{{ asset('custom/css/login.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> --}}
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    @include('theme')
</head>

<body id="kt_body">
    @include('template')

    <div style="position: relative;">
        <div class="w-100 h-100" id="particles-js" style="position: absolute;"></div>

        <div style="position: absolute">
            <div class="row p-0 m-0">
                <div class="col-4">
                    <img class="w-100 p-20" src="{{ asset('images/Client-Logo.png') }}" alt="Client Logo">
                </div>
                <div class="col-4">
                    <br><br>
                    <div class="login-form p-40" style="background-image: url({{ asset('images/bg-circle.png') }});">
                        <center>
                            <img src="{{ asset('images/Corsys-Logo.png') }}" class="w-100">
                        </center>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            {{ select(label: 'Database', option: ['Live System', 'Cetak']) }}
                            {{ input(label: 'User ID', inline: true) }}
                            {{ input(label: 'Password', inline: true) }}
                            {{ button('Login') }}
                        </form>
                    </div>
                    <center>
                        <p class="text-white">&copy; 2024 <a href="#">CorSys-Bank</a>. All Rights Reserved.</p>
                    </center>
                </div>
                <div class="col-4">
                    <img class="w-100 p-20" src="{{ asset('images/Corsys-Logo.png') }}" alt="Corsys Logo">
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.39.0/tsparticles.min.js"></script>
    <script src="{{ asset('custom/js/login.js') }}"></script>

</body>

</html>
