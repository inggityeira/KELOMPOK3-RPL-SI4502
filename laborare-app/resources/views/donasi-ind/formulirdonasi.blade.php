@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}
    
    <div class="container">
    <div class="row">
        <div class="col-5 justify-content-end align-items-end text-end">
            <img src="{{ asset('donasi/' . $donasi->sampul_donasi) }}" class="w-50 h-75" alt="{{$donasi->nama_donasi}}">
        </div>
        <div class="col-7">
        <form action="{{route('pembayarandonasi')}}" method="GET">
            <h5>Anda Akan Berdonasi Dalam Program:</h5>
            <h3>{{$donasi->nama_donasi}}</h3>
            <h1>IDR</h1>
            <input type="text" name="nominal" class="w-50">
        </div>
    </div>
    <div class="row w-100">
        <div class="col-2">
            &nbsp;
        </div>
        <div class="col-8">
            <h1 class="justify-content-center align-items-center text-center">Data Diri</h1>
            
            @csrf
            @method('POST')
            <div class="col-12">
                <h4 class="text-start">Nama Lengkap</h4>
                <input type="text" class="w-100" name="nama_lengkap">
                <h4>Tuliskan Pesan atau Doa</h4>
                <textarea name="pesan" rows="5" cols="88"></textarea>
                <div class="row justify-content-center align-items-center">
                    <button type="submit" class="btn btn-light text-dark fw-bold w-25 mt-2">Donasi</button>
                </div>
            </div>
            </form>
        </div>
        <div class="col-2">
            &nbsp;
        </div>
    </div>
</div>
@endsection
