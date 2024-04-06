@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
<div style="margin-top:100px; margin-left:550px; height:200px;">
    <form>
        <div class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 400px; border-radius: 0px;">
            <button class="btn" type="submit" style="background-color:#D9D9D9; margin-left:-8px; border-radius: 0px;"><img src="img/komponen/cari.png" alt="Cari" width="30px"></button>
        </div>
        <div class="mt-2 d-flex" style="width: 300px; margin-left:85px;">
            <span class="input-group-text" style="border-radius: 0px;">Kategori</span>
            <select class="form-select" aria-label="Default select example" style="border-radius: 0px;">
                <option selected>Semua</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </form>
</div>
@endsection