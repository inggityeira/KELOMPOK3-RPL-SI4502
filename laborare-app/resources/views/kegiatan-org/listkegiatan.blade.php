@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kegiatan</title>
<style>
  body { font-family: Arial, sans-serif; }
  .activity { margin-bottom: 20px; }
  .activity-header { font-size: 24px; font-weight: bold; margin-bottom: 10px; }
  .activity-list { list-style: none; padding: 0; }
  .activity-item { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; }
  .activity-item img { width: 100%; height: auto; border-bottom: 1px solid #ddd; margin-bottom: 10px; }
  .activity-item h3 { margin: 0; }
  .activity-item p { margin: 10px 0; }
  .activity-item button { background-color: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer; }
  .activity-item button:hover { background-color: #0056b3; }
  .sidebar { float: right; width: 30%; }
  .sidebar img { width: 100%; height: auto; margin-bottom: 10px; }
</style>
</head>
<body>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
LIST KEGIATAN
<div class="main-content">
  <div class="activity">
    <div class="activity-header">DAFTAR KEGIATAN</div>
    <ul class="activity-list">
      <li class="activity-item">
        <img src="path-to-image.jpg" alt="Garda Muda Berkibar">
        <h3>Garda Muda Berkibar</h3>
        <p>1 April - 15 Mei 2024</p>
        <button>Detail</button>
      </li>
      <!-- Repeat for other activities -->
    </ul>
  </div>
</div>

<div class="sidebar">
  <div class="activity-header">+Kegiatan</div>
  <!-- Thumbnails of other activities -->
  <img src="path-to-thumbnail.jpg" alt="Activity Thumbnail">
  <!-- Repeat for other thumbnails -->
</div>

</body>
</html>
@endsection