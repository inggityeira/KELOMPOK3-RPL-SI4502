@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Activity</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #333;
    color: #fff;
    margin: 0;
    padding: 20px;
  }
  .breadcrumb {
    color: #aaa;
    margin-bottom: 20px;
  }
  .edit-form {
    background-color: #fff;
    color: #333;
    border-radius: 8px;
    padding: 20px;
    max-width: 500px;
    margin: auto;
  }
  input, select, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="file"] {
    border: none;
  }
  button {
    background-color: #5cb85c;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  button:hover {
    background-color: #4cae4c;
  }
</style>
</head>
<body>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
EDIT KEGIATAN
<div class="breadcrumb">
  Kegiatan > Detail Kegiatan > Edit Kegiatan
</div>

<div class="edit-form">
  <h2>EDIT KEGIATAN</h2>
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

    <button type="submit">Perbarui</button>
  </form>
</div>

</body>
</html>
@endsection