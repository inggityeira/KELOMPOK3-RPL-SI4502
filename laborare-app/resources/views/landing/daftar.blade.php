<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>LABORARE | DAFTAR</title>
    
    <style>
        body{
            margin: 0%;
            padding: 0%;
            background-color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-transparent" style="margin-right: 3%;">
        <div class="navbar-nav" style="font-size: 18px;">
            <a href="/"><h2><img src="/img/LOGO.png" alt="Laborare" style=" width:70%;"></h2></a> 
            <a class="nav-link position-absolute start-50" aria-current="page" href="/timkami" style="color: white; margin-top: 1%; letter-spacing:5px;"><strong>TIM KAMI</strong></a>
            <a class="btn position-absolute end-0" style="background-color:white; color:black; margin-top: 1%; " aria-current="page" href="/masuk"><strong>MASUK</strong></a>
        </div>
    </nav>

    <div class="background-image d-flex flex-column justify-content-center align-items-center" style="background-image: url('/img/register.png');  background-size: 100% 100%;  background-position: center; margin-top: -2%;">
        <h1 style="color: white; margin-top:20px; font-size:50px; letter-spacing:7px;"><strong>DAFTAR</strong></h1>
        <div class="d-flex flex-column justify-content-center align-items-center" style="width: 55%; margin-top: 2%; background:black; border-radius: 10px;">
            <form class="row g-3" enctype="multipart/form-data" style="width: 90%; margin-top: 2%;">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
    
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
    
                @csrf
                <div class="col-12">
                    <label for="inputName" class="form-label" style="color: white;">Nama</label>
                    <input type="text" class="form-control" name="nama_user" placeholder="Masukan nama anda disini" value="{{old('nama_user')}}" style="border-radius: 8px; background:white;">
                    <span class="text-danger">@error('nama_user') {{$message}} @enderror</span>
                </div>
    
                <div class="col-12">
                    <label for="inputAlamat" class="form-label" style="color: white;">Alamat</label>
                    <textarea class="form-control" name="alamat_user" placeholder="Masukan alamat anda disini" rows="3" style="border-radius: 8px; background:white;"></textarea>
                    <span class="text-danger">@error('alamat_user') {{$message}} @enderror</span>
                </div>
    
                <div class="col-12">
                    <label for="formFile" class="form-label" style="color: white;">Foto Profil</label>
                    <input class="form-control" name="foto_profil" type="file" id="foto_profil">
                </div>
    
                <div class="col-12">
                    <label for="inputNotelpon" class="form-label" style="color: white;">Nomor Telepon</label>
                    <input type="number" class="form-control" name="nomor_telepon" placeholder="Masukan nomor telepon anda disini" value="{{old('nomor_telepon')}}" style="border-radius: 8px; background:white;">
                    <span class="text-danger">@error('nomor_telepon') {{$message}} @enderror</span>
                </div>
    
                <div class="col-12">
                    <label for="inputEmail" class="form-label" style="color: white;">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email here" value="{{old('email')}}" style="border-radius: 8px; background:white;">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
    
                <div class="col-12">
                    <label for="inputPassword" class="form-label" style="color: white;">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your Passowrd here" style="border-radius: 8px; bbackground:white;">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
    
                <div class="button-login d-grid mb-5">
                    <button class="btn btn-lg btn-primary text-white btn-login fw-bold" type="submit" style="background-color:#2895F7; font-size: 15px;">Sign-Up</button>
                </div>
    
            </form>
        </div>
        <br>
    </div>

    <div style="height: 50px">
        <br>
    </div>
</body>
</html>