{{-- Nav --}}

<nav class="navbar navbar-expand-lg bg-transparent" style="margin-right: 3%; margin-bottom: -2%">
    <h2><img src="/img/LOGO.png" alt="Laborare" style=" width:70%;"></h2>
    <ul class="navbar-nav" style="font-size: 18px; margin-top:-2%; margin-left:1%; letter-spacing:5px;">
        <li class="nav-item">
            <a class="{{ Request::is('home*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/home" style="color: white; margin-top: 1%;"><strong>BERANDA</strong></a>
        </li>
        <li class="nav-item">
            <a class="{{ Request::is('listkegiatan-Ind*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/listkegiatan-Ind" style="color: white; margin-top: 1%;"><strong>KEGIATAN</strong></a>
        </li>
        <li class="nav-item">
            <a class="{{ Request::is('listdonasi-Ind*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/listdonasi-Ind" style="color: white; margin-top: 1%;"><strong>DONASI</strong></a>
        </li>
        <li class="nav-item">
            <a class="{{ Request::is('jumlahpoin*') ? 'nav-link active' : 'nav-link' }} mx-5" aria-current="page" href="/jumlahpoin" style="color: white; margin-top: 1%;"><strong>POIN</strong></a>
        </li>            
    </ul>
</nav>

{{-- Nav End --}}
