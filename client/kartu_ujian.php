<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Kartu Ujian</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/kartu_ujian.css">
		<link rel="stylesheet" type="text/css" href="./css/font.css">
		<link rel="stylesheet" type="text/css" href="./css/color.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.bundle.js"></script>
    </head>
    <body class="d-flex flex-column min-vh-100">
        <div class="col-12 m-0 p-0" id="header">
            <div class="col-12 m-0 px-5 py-2 bg-black d-flex justify-content-between">
                <div class="col-1">
                    <div class="col-10 p-1">
                        <a href="./home.php"><img class="img-fluid" src="./images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="d-flex align-items-center px-3">
                    <a class="text-decoration-none" href="#"><p class="m-0 p-0 primary-font text-primary">Beranda</p></a>
                </div>
                <div class="d-flex align-items-center px-3">
                    <a class="text-decoration-none" href="#"><p class="m-0 p-0 primary-font text-light">Cek Status Pendaftaran</p></a>
                </div>
                <div class="d-flex align-items-center px-3">
                    <a class="text-decoration-none" href="#"><p class="m-0 p-0 primary-font text-light">Cek Hasil Ujian</p></a>
                </div>
                <div class="d-flex align-items-center px-3">
                    <a class="text-decoration-none" href="#"><p class="m-0 p-0 primary-font text-light">Cetak Kartu Ujian</p></a>
                </div>
                <div class="d-flex align-items-center px-3">
                    <div class="container">
                        <div class="dropdown">
                            <button id="tes" type="button" class="btn btn-light rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $data["u_nama_lengkap"]; ?></button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="tes">
                                <li><a class="dropdown-item primary-font" href="../server/keluar.php">Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-5 m-0 d-flex flex-grow-1 justify-content-center align-items-center color-white-background">
            <div class="row col-10 d-flex flex-column">
                <div class="pb-4 d-flex flex-row justify-content-end">
                    <button type="button" class="btn btn-primary btn-block rounded-pill col-2 primary-font fs-6" onclick="">Unduh</button>
                </div>
                <div class="border border-1 border-dark bg-white">
                    <div class="row d-flex flex-column px-5">
                        <nav class="navbar navbar-expand-md">
                            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active d-flex justify-content-center">
                                        <img class="w-50 img-fluid" src="./images/logo.png">
                                    </li>
                                </ul>
                            </div>
                            <div class="mx-auto order-0 col-6 align-items-center">
                                <p class="navbar-brand mx-auto text-center m-0 p-0 fs-3 fw-bold text-wrap">KARTU PESERTA UJIAN CPNS 2017</p>
                            </div>
                            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2"></div>
                        </nav>
                        <hr>
                        <div class="col-12 d-flex flex-row">
                            <div class="row col-9 d-flex flex-column">
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Instansi</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">Kementrian Kelautan dan Perikanan</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Lokasi</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">Instiut Teknologi Sepuluh Nopember</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">NIK</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">3204287003920001</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Nomor Peserta</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">000005162</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Nama</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">Yoga Prameswara Mamahit</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Jenis Kelamin</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">Laki-laki</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Tempat/Tanggal Lahir</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">Jakarta/30-01-1993</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Kualifikasi Pendidikan</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">SLTA</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Formasi Jabatan</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">Pengawas Perikanan Pertama</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row">
                                    <div class="col-4">
                                        <p class="primary-font fs-5">Lokasi Tes</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="primary-font fs-5 ps-3">GEDUNG MINA BAHARI III KEMENTRIAN KELAUTAN DAN PERIKANAN JAKARTA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-3 d-flex flex-column">
                                <svg id="barcode"></svg>
                                <img class="img-fluid" src="./images/foto kosong.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./kartu_ujian.js"></script>
    </body>
</html>