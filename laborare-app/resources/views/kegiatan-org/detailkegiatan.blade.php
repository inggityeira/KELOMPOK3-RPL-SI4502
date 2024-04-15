@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Kegiatan</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 20px;
  }
  .breadcrumb {
    color: #555;
    margin-bottom: 20px;
  }
  .container {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    max-width: 600px;
    margin: auto;
  }
  .form-group {
    margin-bottom: 15px;
  }
  label {
    display: block;
    margin-bottom: 5px;
  }
  input, select, textarea, button {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
  }
  button {
    background-color: #5cb85c;
    color: white;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }
  .button-secondary {
    background-color: #337ab7;
  }
  .button-danger {
    background-color: #d9534f;
  }
  .container .image{
    text-align: center;
  }
  .class-button{
    display: flex;
    justify-content: flex-end; 
  }
  .class-button button{
    width: 20%;
    margin: 5px;
    justify-self: end;
  }
</style>

</head>
<body>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
DETAIL KEGIATAN
<div class="breadcrumb">
  Kegiatan > Detail Kegiatan
</div>

<div class="container">
  <div class="image">
  <img src="{{url('/img/1.jpg')}}" alt="">
  </div>
  <h2>DETAIL KEGIATAN</h2>
  <div class="form-group">
    <label for="activityName">Nama Kegiatan</label>
    <input type="text" id="activityName" name="activityName">
  </div>
  <div class="form-group">
    <label for="activityDate">Tanggal Kegiatan</label>
    <input type="date" id="activityDate" name="activityDate">
  </div>
  <div class="form-group">
    <label for="activityStatus">Status Kegiatan</label>
    <select id="activityStatus" name="activityStatus">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
  </div>
  <div class="form-group">
    <label for="activityCategory">Kategori Kegiatan</label>
    <select id="activityCategory" name="activityCategory">
      <option value="category1">Pendidikan</option>
      <option value="category2">Lingkungan</option>
      <option value="category3">Sosial</option>
      <option value="category4">Kesehatan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="activityDescription">Deskripsi Kegiatan</label>
    <textarea id="activityDescription" name="activityDescription"></textarea>
  </div>
  <div class="class-button">
  <button type="submit">Sukarelawan</button>
  <button type="button" class="button-secondary">Edit</button>
  <button type="button" class="button-danger">Hapus</button>
  </div>
</div>

</body>
</html>
@endsection