@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #fff;
  }
  .breadcrumb {
    color: grey;
    font-size: 14px;
    padding: 16px;
  }
  .title {
    font-size: 24px;
    font-weight: bold;
    color: black;
    padding: 8px 16px;
  }
  .activity-panel {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 16px;
    margin: 16px;
    width: calc(50% - 32px);
    box-sizing: border-box;
  }
  .activity-panel img {
    width: 100%;
    height: auto;
    border-radius: 4px;
  }
  .status {
    font-weight: bold;
    color: green;
    float: right;
  }
  .activity-info {
    margin-top: 8px;
  }
  .activity-title {
    font-size: 18px;
    color: black;
  }
  .organizer-date {
    color: grey;
    font-size: 14px;
  }
  .button {
    background-color: green;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  .button:not(:last-child) {
    margin-right: 8px;
  }
  .activity-panel:nth-child(odd) {
    clear: both;
  }
</style>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
PROGRESS KEGIATAN

<div class="breadcrumb">
  Kegiatan > Kegiatan Yang Diikuti
</div>

<div class="title">
  KEGIATAN YANG ANDA IKUTI
</div>

<div class="activity-panel">
  <img src="thumbnail.jpg" alt="Activity Thumbnail">
  <div class="status">Selesai</div>
  <div class="activity-info">
    <div class="activity-title">Relawan Berbagi</div>
    <div class="organizer-date">Oleh KitaBisa - 18 Mar 2024</div>
  </div>
  <button class="button">Lihat</button>
  <button class="button">Sertifikat</button>
</div>

<!-- activity-panel next+++++ -->

</body>
</html>

@endsection