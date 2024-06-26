{{-- Nav --}}
@php
    $user = \App\Models\User::where('id_user', session('loginId'))->first();
@endphp

<nav class="navbar navbar-expand-lg bg-transparent position-relative"
    style="margin-right: 100px; margin-bottom: -2%; height:100px;">
    <a href="/home" style="padding:0px;">
        <h2><img src="/img/LOGO.png" alt="Laborare" style="width:230px; margin-left:10px; margin-top:-35px;"></h2>
    </a>
    <div style="display: flex; justify-content: center;" >
        <ul class="navbar-nav top-10"
            style="font-size: 18px;  margin-top:-30px; letter-spacing:5px; margin-left:100px;">
            <li class="nav-item">
                <a class="{{ Request::is('home*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page"
                    href="/home" style="color: white;"><strong>BERANDA</strong></a>
            </li>
            <li class="nav-item">
                @if ($user->peran_user == 'Organisasi')
                    <a class="{{ Request::is('listbaru-Org*', 'kegiatanbaru-Org*', 'editkegiatan-Org*', 'detailkegiatan-Org*', 'laporsukarelawan-Org*', 'formlapor*') ? 'nav-link active' : 'nav-link' }} mx-5"
                        aria-current="page" href="/listbaru-Org" style="color: white;"><strong>KEGIATAN</strong></a>
                @elseif($user->peran_user == 'Individu')
                    <a class="{{ Request::is('listkegiatan-Ind*', 'detailkegiatan-Ind*', 'daftarkegiatan*', 'progresskegiatan*', 'sertifikatkegiatan*') ? 'nav-link active' : 'nav-link' }} mx-5"
                        aria-current="page" href="/listkegiatan-Ind" style="color: white;"><strong>KEGIATAN</strong></a>
                @endif
            </li>
            <li class="nav-item">
                @if ($user->peran_user == 'Organisasi')
                    <a class="{{ Request::is('listdonasi-Org*', 'donasibaru-Org*', 'detaildonasi-Org*', 'editdonasi-Org*') ? 'nav-link active' : 'nav-link' }} mx-5"
                        aria-current="page" href="/listdonasi-Org" style="color: white;"><strong>DONASI</strong></a>
                @elseif($user->peran_user == 'Individu')
                    <a class="{{ Request::is('listdonasi-Ind*', 'donasi/detail*', 'formulir*', 'pembayaran*') ? 'nav-link active' : 'nav-link' }} mx-5"
                        aria-current="page" href="/listdonasi-Ind" style="color: white;"><strong>DONASI</strong></a>
                @endif
            </li>
            <li class="nav-item">
                @if ($user->peran_user == 'Organisasi')
                    <a class="{{ Request::is('listsukarelawan*', 'detailsukarelawan*', 'rekrutsukarelawan*') ? 'nav-link active' : 'nav-link' }} mx-5"
                        aria-current="page" href="/listsukarelawan"
                        style="color: white;"><strong>REKRUITASI</strong></a>
                @elseif($user->peran_user == 'Individu')
                    <a class="{{ Request::is('jumlahpoin*', 'tablepoint*') ? 'nav-link active' : 'nav-link' }} mx-5"
                        aria-current="page" href="/jumlahpoin" style="color: white;"><strong>POIN</strong></a>
                @endif
            </li>
        </ul>
    </div>
    @if ($user->peran_user == 'Organisasi')
        <a class="navbar-nav ml-auto d-flex flex-column align-items-center justify-content-center position-absolute top-10 start-100"
            style=" margin-top:-20px; text-decoration: none;" href="/profil-Org">
            @if ($user->foto_profil != null)
                <img src="{{ asset('fotoprofil/' . $user->foto_profil) }}" alt="Profile"
                    style="border-radius: 50%; width: 40px; height: 40px;">
            @else
                <img src="{{ asset('fotoprofil/kosong.png') }}" alt="Profile"
                    style="border-radius: 50%; width: 40px; height: 40px;">
            @endif
            <div style="color: white; letter-spacing:0px; font-size:90%;">Profil</div>
        </a>
    @elseif($user->peran_user == 'Individu')
        <a class="navbar-nav ml-auto d-flex flex-column align-items-center justify-content-center position-absolute top-10 start-100"
            style="margin-top:-20px; text-decoration: none;" href="/profil-Ind">
            @if ($user->foto_profil != null)
                <img src="{{ asset('fotoprofil/' . $user->foto_profil) }}" alt="Profile"
                    style="border-radius: 50%; width: 40px; height: 40px;">
            @else
                <img src="{{ asset('fotoprofil/kosong.png') }}" alt="Profile"
                    style="border-radius: 50%; width: 40px; height: 40px;">
            @endif
            <div style="color: white; letter-spacing:0px; font-size:90%;">Profil</div>
        </a>
    @endif
</nav>

{{-- Nav End --}}
