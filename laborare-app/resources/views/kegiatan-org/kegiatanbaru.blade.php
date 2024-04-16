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
        <form>
            <label for="activityName">Nama Kegiatan</label>
            <input type="text" id="activityName" name="activityName">

            <label for="activityDate">Tanggal Kegiatan</label>
            <input type="date" id="activityDate" name="activityDate">

            <label for="activityCover">Sampul Kegiatan</label>
            <input type="file" id="activityCover" name="activityCover">

            <label for="activityStatus">Status Kegiatan</label>
            <select id="activityStatus" name="activityStatus">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

            <label for="activityCategory">Kategori Kegiatan</label>
            <select id="activityCategory" name="activityCategory">
                <option value="category1">Pendidikan</option>
                <option value="category2">Lingkungan</option>
                <option value="category3">Sosial</option>
                <option value="category4">Kesehatan</option>
            </select>

            <label for="activityDescription">Deskripsi Kegiatan</label>
            <textarea id="activityDescription" name="activityDescription"></textarea>

            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>
@endsection