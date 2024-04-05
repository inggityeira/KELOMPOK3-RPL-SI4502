<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laborare profile organisasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .tracking-wide {
            letter-spacing: 3px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Laborare.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-evenly mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link tracking-wide fs-6 mx-5 active" aria-current="page" href="#">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tracking-wide fs-6 mx-5" href="#">KEGIATAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tracking-wide fs-6 mx-5" href="#">DONASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tracking-wide fs-6 mx-5" href="#">POIN</a>
                    </li>
                </ul>
                <button class="btn btn-outline-success" type="submit">Profil</button>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <nav style="--bs-breadcrumb-divider: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&quot;);" aria-label="breadcrumb" class="mx-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-dark fw-bold">Kegiatan</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-dark fw-bold">Detail
                        Kegiatan</a></li>
                <li class="breadcrumb-item" aria-current="page">Formulir Kegiatan</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid text-center">
        <p class="fw-semibold" style="letter-spacing: 1px;">Jadilah Pembuat Perubahan</p>
        <div class="d-flex justify-content-center my-4">
            <div style="height: 300px; width: 300px; background-color: beige;"></div>
        </div>
        <p class="fw-semibold" style="letter-spacing: 1px;">Mohon Isi Formulir</p>
    </div>

    <div class="container px-5 pb-5">
        <div class="card bg-body-secondary mx-5">
            <div class="card-body mx-5">
                <form class="py-4 px-5">
                    <div class="mb-3">
                        <label for="nama-lengkap" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama-lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="kontak-wali" class="form-label fw-bold">Kontak Wali</label>
                        <input type="text" class="form-control" id="kontak-wali">
                    </div>
                    <div class="mb-3">
                        <label for="nama-kegiatan" class="form-label fw-bold">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="nama-kegiatan">
                    </div>
                    <div class="mb-3">
                        <label for="pas-foto" class="form-label fw-bold">Pas Foto</label>
                        <input type="text" class="form-control" id="pas-foto">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label fw-bold">Alamat</label>
                        <input type="text" class="form-control" id="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="motivasi" class="form-label fw-bold">Motivasi Mengikuti Kegiatan</label>
                        <input type="text" class="form-control" id="motivasi">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-dark px-4">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer> </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>