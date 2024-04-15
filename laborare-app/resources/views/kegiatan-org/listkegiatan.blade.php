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
  body { 
    font-family: Arial, sans-serif; 
  }

  .activity { 
    margin-bottom: 20px; 
  }

  .activity-header { 
    font-size: 24px; 
    font-weight: bold; 
    margin-bottom: 10px; 
  }

  .activity-list {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .activity-item {
    margin-bottom: 10px;
    list-style-type: none;
    background-color: white;
    color: black;
    font-weight: bold;
  }

  .activity-item img { 
    width: 100%; 
    height: auto; 
    border-bottom: 1px solid #ddd; 
  }

  .activity-item h5,
  .activity-item p {
    margin: 0;
    font-weight: bold;
    float: left; /* Mengatur nama dan tanggal ke kiri */
  }

  .activity-item button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    width: 30%;
    height: 40%;
    float: right; /* Mengatur tombol ke kanan */
    border-radius: 50px; /* Menambahkan border radius */
    margin-top: 5px;
    color: white;
    background-color: black;
  }

  .activity-item button:hover {
    background-color: #0056b3;
  }

  .sidebar { 
    float: right; 
    width: 30%; 
  }

  .sidebar img { 
    width: 100%; 
    height: auto; 
    margin-bottom: 10px; 
  }

  .row-image img {
    width: 100%; 
    height: 10%; 
    margin-bottom: 50px;
    object-fit: cover;
  }
  .desc {
    display: flex;
    justify-content: space-between; /* Mengatur jarak antara nama dan tombol */
    align-items: center; /* Mengatur item secara vertikal */
    margin-bottom: 10px;
  }
  .activity h3{
    font-weight: bolder;
    margin-left: 30px;
  }
  .detail-kegiatan{
    display: flex;
    justify-content: space-between; /* Mengatur jarak antara judul dan tombol */
    align-items: center; /* Mengatur item secara vertikal */
    margin-bottom: 20px;
  }
  .detail-kegiatan button{
    font-weight: bold;
    padding: 5px;
  }
</style>




</head>
<body>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
<div class="main-content">
  <div class="activity">
    <div class="activity-header">Kegiatan</div>
    <div class="row-image">
      <img src="{{url('/img/Mask group.jpg')}}" alt="">
    </div>
    <div class="detail-kegiatan">
    <h3>
      Daftar Kegiatan
    </h3>
    <button> + Kegiatan</button>
    </div>
    <ul class="activity-list">
      <li class="activity-item">
        <img src="{{url('/img/1.jpg')}}" alt="Garda Muda Berbakti">
        <div class="desc">
        <div class="detail">
        <h5>Garda Muda Berbakti</h5>
        <p>1 April - 15 Mei 2024</p>
        </div>
        <button>Detail</button>
        </div>
      </li>
      <li class="activity-item">
        <img src="{{url('/img/2.jpg')}}" alt="Garda Muda Berbakti">
        <div class="desc">
        <div class="detail">
        <h5>Garda Muda Berkibar</h5>
        <p>1 April - 15 Mei 2024</p>
        </div>
        <button>Detail</button>
        </div>
      </li>
      <li class="activity-item">
        <img src="{{url('/img/3.jpg')}}" alt="Mari Berbagi">
        <div class="desc">
        <div class="detail">
        <h5>Mari Berbagi</h5>
        <p>16 Mei - 1 Juni 2024</p>
        </div>
        <button>Detail</button>
        </div>
      </li>
      <li class="activity-item">
        <img src="{{url('/img/4.jpg')}}" alt="Generasi Muda Maju">
        <div class="desc">
        <div class="detail">
        <h5>Generasi Muda Maju</h5>
        <p>1 Juli - 18 Agustus 2024</p>
        </div>
        <button>Detail</button>
        </div>
      </li>
      <li class="activity-item">
        <img src="{{url('/img/5.jpg')}}" alt="Garda Muda Berbakti">
        <div class="desc">
        <div class="detail">
        <h5>Garda Muda Berbakti</h5>
        <p>1 April - 15 Mei 2024</p>
        </div>
        <button>Detail</button>
        </div>
      </li>
      <li class="activity-item">
        <img src="{{url('/img/6.jpg')}}" alt="Garda Muda Berbakti">
        <div class="desc">
        <div class="detail">
        <h5>Garda Muda Berbakti</h5>
        <p>1 April - 15 Mei 2024</p>
        </div>
        <button>Detail</button>
        </div>
      </li>
      <!-- Repeat for other activities -->
    </ul>
  </div>
</div>

<div class="sidebar">
  <!-- Repeat for other thumbnails -->
</div>

</body>
</html>
@endsection