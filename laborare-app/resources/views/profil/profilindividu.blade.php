@extends('layouts.main')

@section('title', 'LABORARE | PROFIL')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
<div class="container">
   <a href="/profil-Ind" style="text-decoration: none; color: white;">Profile</a>
</div>

<div class="d-flex flex-column align-items-center mt-5 text-center">
    <img src="/fotoprofil/inggit.jpg" alt="..." class="rounded-circle" width="130px" height="130px">
    <div class="mt-4">
        <h2 class="fw-bolder">INGGIT YEIRA BUDI A.</h2>
        <p>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, <br> Kabupaten Bandung, Jawa Barat 40257</p>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <form action="" class="col-md-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group mt-2">
            <label for="no">Nomer Telepon</label>
            <input type="tel" class="form-control" id="no">
        </div>
        <div class="form-group row mt-2">
            <div class="col">
                <label for="Usia">Usia</label>
                <input type="number" class="form-control" id="Usia">
            </div>
            <div class="col mt-2">
                <label>Jenis Kelamin</label>
                <div>
                    <input type="radio" id="Pria" name="jenis_kelamin" value="Pria">
                    <label for="Pria">Pria</label>
                    <input type="radio" id="Wanita" name="jenis_kelamin" value="Wanita">
                    <label for="Wanita">Wanita</label>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <a href="/editprofil-Ind" type="submit" class="btn btn-light mr-2">Edit</a>
            <a href="/logout" type="submit" class="btn btn-danger">Keluar</a>
        </div>
    </form>
</div>








@endsection
