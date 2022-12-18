<?php 
    include "../server/config.php";
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION["izin"]) && $_SESSION["izin"] == "admin") {
        header("Location: ./admin/home.php");
    }
    else if (isset($_SESSION["izin"]) && $_SESSION["izin"] == "user") {
        $user_id = $_SESSION["id"];
    }
    else {
        header("Location: ./login.php");
    }
?>
<html>
    <head>
        <title>Upload Berkas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/home.css">
		<link rel="stylesheet" type="text/css" href="./css/font.css">
		<link rel="stylesheet" type="text/css" href="./css/color.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
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
                    <a class="text-decoration-none" href="#"><p class="m-0 p-0 primary-font text-light">Beranda</p></a>
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
                            <button id="tes" type="button" class="btn btn-light rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Nama</button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="tes">
                                <li><a class="dropdown-item" href="#">Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-5 m-0 d-flex flex-grow-1 justify-content-center align-items-center color-white-background">
            <div class="row col-8 d-flex flex-column">
                <div class="card-corner bg-light p-4"> 
                    <div class="row col-10 mx-auto">
                        <form id="form-upload-berkas" method="POST" enctype="multipart/form-data" action="../server/simpan_berkas.php">
                            <div class="row d-flex flex-column">
                                <div class="pb-3">
                                    <p class="primary-font fs-4 text-center">Isi Data Pendaftaran</p>
                                </div>
                            </div>
                            <!-- Input pas-foto -->
                            <label class="primary-font fs-6" for="input-pas-foto">Pas Foto</label>
                            <div class="form-outline mb-4 mt-2">
                                <input type="file" name="pas_foto" id="input-pas-foto" class="form-control form-control-lg required">
                            </div>

                            <!-- Input foto-ktp -->
                            <label class="primary-font fs-6" for="input-foto-ktp">Kartu Tanda Penduduk</label>
                            <div class="form-outline mb-4 mt-2">
                                <input type="file" name="foto_ktp" id="input-foto-ktp" class="form-control form-control-lg required">
                            </div>

                            <!-- Input foto-kk -->
                            <label class="primary-font fs-6" for="input-foto-kk">Kartu Keluarga</label>
                            <div class="form-outline mb-4 mt-2">
                                <input type="file" name="foto_kk" id="input-foto-kk" class="form-control form-control-lg required">
                            </div>

                            <!-- Input ijazah -->
                            <label class="primary-font fs-6" for="input-ijazah">Ijazah</label>
                            <div class="form-outline mb-4 mt-2">
                                <input type="file" name="ijazah" id="input-ijazah" class="form-control form-control-lg required">
                            </div>

                            <!-- Input transkrip-nilai -->
                            <label class="primary-font fs-6" for="input-transkrip-nilai">Transkrip Nilai</label>
                            <div class="form-outline mb-4 mt-2">
                                <input type="file" name="transkrip_nilai" id="input-transkrip-nilai" class="form-control form-control-lg required">
                            </div>

                            <!-- Tombol registrasi -->
                            <div class="col d-flex justify-content-between mt-3">
                                <button id="button-upload-berkas" type="button" class="btn btn-primary btn-block rounded-pill mb-4 primary-font fs-6">Update Berkas</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./upload-berkas.js"></script>
    </body>
</html>