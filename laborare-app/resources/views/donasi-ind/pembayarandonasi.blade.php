@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}
<div class="container">
    <h5>Donasi > Detail Donasi > Formulir Donasi > Pembayaran</h5>
    <div class="row text-center justify-content-center align-items-center">
        <h4 class="fw-bold">Informasi Pembayaran</h4>
        <img src="{{'img/barcode.jpg'}}" class="w-25" alt="">
        <div class="row">
            <p class="m-3">Kode QR ini bisa di-scan dengan semua aplikasi yang mendukung QRIS <br> seperti GoPay, OVO, DANA, LinkAja dan lainnya.</p>
        </div>
        <form action="{{route('pembayarandonasi_store')}}" method="POST">
        @csrf
        @method('POST')
        <input type="hidden" name="nominal" value="{{$nominal}}">
        <input type="hidden" name="pesan" value="{{$pesan}}">
        <button type="submit" class="btn btn-light text-dark fw-bold" name="submit">Selesai</button>
        </form>
    </div>
</div>
@endsection
