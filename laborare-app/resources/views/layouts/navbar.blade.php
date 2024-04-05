{{-- Nav --}}

<nav class="navbar navbar-expand-lg bg-transparent" style="margin-right: 3%; margin-bottom: -2%;">
    <a href="/home"><h2><img src="/img/LOGO.png" alt="Laborare" style=" width:100%;"></h2></a>
    <ul class="navbar-nav" style="font-size: 18px;  margin-left:7%; letter-spacing:5px;">
        <li class="nav-item">
            <a class="{{ Request::is('home*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/home" style="color: white; margin-top: -18px;"><strong>BERANDA</strong></a>
        </li>
        <li class="nav-item">
            <a class="{{ Request::is('listkegiatan-Ind*', 'detailkegiatan-Ind*', 'carikegiatan*', 'detailkegiatan-Org*', 'editkegiatan-Org*', 'kegiatanbaru-Org*', 'listbaru-Org*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/listkegiatan-Ind" style="color: white; margin-top: -18px;"><strong>KEGIATAN</strong></a>
        </li>
        <li class="nav-item">
            <a class="{{ Request::is('listdonasi-Ind*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/listdonasi-Ind" style="color: white; margin-top: -18px;"><strong>DONASI</strong></a>
        </li>
        <li class="nav-item">
            {{-- @if(auth()->user()->peran_user == 'Individu')
                <a class="{{ Request::is('jumlahpoin*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/jumlahpoin" style="color: white; margin-top: -18px;"><strong>POIN</strong></a>
            @else
                <a class="{{ Request::is('listsukarelawan*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/listsukarelawan" style="color: white; margin-top: -18px;"><strong>REKRUITASI</strong></a>
            @endif --}}
            @php
                $user = \App\Models\User::where('id_user', session('loginId'))->first();
            @endphp
            @if($user)
                <div class="card-header">{{ $user->nama_user }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Peran User:</label>
                        <p>{{ $user->peran_user }}</p>
                    </div>
                </div>
            @endif
        </li>
        <li class="nav-item">
            <a class="navbar-nav ml-auto d-flex flex-column align-items-center justify-content-center" style="margin-right: -70%; margin-top:-8%; text-decoration: none;" href="/profil-Ind">
                <img src="fotoprofil/kosong.png" alt="Profile" style="border-radius: 50%; width: 8%; height: 8%;">
                <div style="color: white; letter-spacing:0px; font-size:90%;">Profil</div>
            </a>
        </li>            
    </ul>
</nav>

{{-- Nav End --}}
