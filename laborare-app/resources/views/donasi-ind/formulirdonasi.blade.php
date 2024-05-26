@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

    <div class="container">
        <form action="{{ route('pembayarandonasi_store', ['id' => $donasi->id_donasi]) }}" method="POST">

            @csrf
            
            <div class="row mb-3">
                <div class="col-5 text-end">
                    <img src="{{ asset('donasi/' . $donasi->sampul_donasi) }}" width="300px;" height="300px;" alt="{{ $donasi->nama_donasi }}">
                </div>
            
                <div class="col-5" style="margin-top: 50px;">
                    <h2>Anda Akan Berdonasi Dalam Program:</h2>
                    <h2><strong>{{ $donasi->nama_donasi }}</strong></h2>
                    <div class="my-3">
                        <label class="form-label">
                            <h1><strong>IDR</strong></h1>
                        </label>
                        <input name="nominal" type="number" class="form-control" style="background-color: #FFFFFF;" required>
                    </div>
                </div>
            
                <h1 class="text-center" style="font-size: 25px; margin-top:10px;"><strong>DATA DIRI</strong></h1>
            </div>
            
            <div class="d-flex flex-column align-items-center">
                <div class="mb-3" style="width: 700px;">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <div style="background-color: #FFFFFF; color:black;" class="p-2 px-3 rounded">{{ $user->nama_user }}</div>
                </div>
                <div class="mb-3" style="width: 700px;">
                    <label for="nama_lengkap" class="form-label fw-semibold">Tuliskan Pesan dan Doa</label>
                    <textarea name="pesan" rows="5" cols="85" class="rounded" style="background-color: #FFFFFF;"></textarea>
                </div>
                <button type="submit" class="btn btn-light text-dark" style="width: 150px;"><strong>Donasi</strong></button>
            </div>
        </form>
    </div>
@endsection
