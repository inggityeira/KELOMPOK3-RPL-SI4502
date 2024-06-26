<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>LABORARE | MASUK</title>

    <style>
        body {
            margin: 0%;
            padding: 0%;
            background-color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-transparent position-relative"
        style="margin-right: 100px; margin-bottom: -2%; height:100px;">
        <div class="navbar-nav" style="font-size: 18px; margin-top:-20px;">
            <a href="/">
                <h2><img src="/img/LOGO.png" alt="Laborare" style=" width:90%; margin-left:10px;"></h2>
            </a>
            <a class="nav-link position-absolute start-50" aria-current="page" href="/timkami"
                style="color: white; letter-spacing:5px;"><strong>TIM KAMI</strong></a>
            <a class="btn position-absolute end-0" style="background-color:white; color:black;" aria-current="page"
                href="/daftar"><strong>DAFTAR</strong></a>
        </div>
    </nav>

    <div class="background-image d-flex flex-column justify-content-center align-items-center"
        style="background-image: url('/img/masuk.png'); height: 85vh; background-size: 100% 100%; background-position: center; margin-top: -2%;">
        <div class="d-flex flex-column justify-content-center align-items-center"
            style="width: 45%;  background-color: rgba(0, 0, 0, 0.3); backdrop-filter:blur(15px); border-radius: 10px;">
            <h1 style="color: white; margin-top:20px; font-size:50px; letter-spacing:7px;"><strong>MASUK</strong></h1>
            <form style="width: 90%;" action="{{ route('user-masuk') }}" method="POST">

                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif

                @csrf

                <div class="mb-4">
                    <label for="inputEmail" class="form-label" style="color: white;">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="Masukan Email disini" value="{{ old('email') }}"
                        style="border-radius: 8px; background:white;">
                    @error('email')
                        <div style="color: white">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="inputPassword" class="form-label" style="color: white;">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password disini"
                        style="border-radius: 8px; background: white;">
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="rememberPasswordCheck">
                    <label class="remember-me form-check-label second-text" for="rememberPasswordCheck"
                        style="color: white;">Ingat Aku</label>
                </div>

                <div class="button-login d-grid mb-4">
                    <button class="btn btn-lg  text-black btn-login fw-bold" type="submit"
                        style="background-color:#E5EFF8; font-size: 15px;">Masuk</button>
                </div>
            </form>


            <div class="mb-3">
                <p style="color: white; font-size: 18px; font-weight: 500; text-align: center;">- ATAU -</p>
                <p style="color: white; font-size: 15px; font-weight: 400; text-align: center;">Belum punya akun? <a
                        href="/daftar" class="primary-text fw-medium" style=" color:white;">Daftar</a></p>
            </div>

        </div>
    </div>
</body>

</html>
