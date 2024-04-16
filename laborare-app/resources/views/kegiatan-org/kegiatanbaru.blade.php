@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Activity</title>
    <style>
        body {
            background-color: #000;
            color: #000;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #000;
            padding: 20px;
            border-radius: 5px;
        }
        .containerbawah {
            width: 80%;
            margin: 0 auto;
            background-color: #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
        }
        button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
KEGIATAN BARU
<body>
    <div class="containerbawah">
        <h1>TAMBAH KEGIATAN</h1>
        <form action="{{route('tambahkegiatan')}}" method="POST">
        @if (session('success'))
    <div class="alert alert-success">
                        {{ session('success') }}
    </div>
                @endif
        @csrf
            <label for="activityName">Nama Kegiatan</label>
            <input type="text" id="activityName" name="activityName">
            <span class="text-danger">@error('activityName') {{$message}} @enderror</span>

            <label for="activityDate">Tanggal Kegiatan</label>
            <input type="date" id="activityDate" name="activityDate">
            <span class="text-danger">@error('activityDate') {{$message}} @enderror</span>

            <label for="activityCover">Sampul Kegiatan</label>
            <input type="file" id="activityCover" name="activityCover">
            <span class="text-danger">@error('activityCover') {{$message}} @enderror</span>

            <label for="activityStatus">Status Kegiatan</label>
            <select id="activityStatus" name="activityStatus">
                <option value="Belum">Belum</option>
                <option value="Berlajan">Berjalan</option>
                <option value="Selesai">Selesai</option>
            </select>
            <span class="text-danger">@error('activityStatus') {{$message}} @enderror</span>

            <label for="activityCategory">Kategori Kegiatan</label>
            <select id="activityCategory" name="activityCategory">
                <option value="Pendidikan">Pendidikan</option>
                <option value="Lingkungan">Lingkungan</option>
                <option value="Sosial">Sosial</option>
                <option value="Kesehatan">Kesehatan</option>
            </select>
            <span class="text-danger">@error('activityCategory') {{$message}} @enderror</span>

            <label for="activityDescription">Deskripsi Kegiatan</label>
            <textarea id="activityDescription" name="activityDescription"></textarea>
            <span class="text-danger">@error('activityDescription') {{$message}} @enderror</span>

            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>
@endsection