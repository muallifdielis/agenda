<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-Admin</title>
    <!-- Bootstrap 5.2.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-link {
            margin-left: 20px;
            margin-right: 20px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            color: black;
        }

        .navbar-nav .nav-link:hover {
            background-color: #d1ecf1;
            color: #0d6efd !important;
            border-radius: 10px;
            transition: 0.3s;
        }

        .header-top {
            background-color: #e0f7fa;
            padding: 10px 20px;
            font-weight: bold;
            font-size: 24px;
        }

        .logout-btn img {
            height: 20px;
            margin-right: 5px;
        }

        .logout-btn {
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Baris atas dengan tulisan PTTUN kiri dan Logout kanan -->
    <div class="header-top d-flex justify-content-between align-items-center">
        <div>PTTUN</div>
        <div>
            <button class="btn btn-danger btn-sm logout-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="../gambar/logout.png" alt="logout">
                Logout
            </button>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom">

        <div class="container-fluid">
            <!-- Tombol toggle saat mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Tengah menu -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column align-items-center" href="index.php">
                            <img src="../gambar/home.png" alt="Dashboard Icon" style="height:80px; margin-bottom:4px;">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column align-items-center" href="agenda.php">
                            <img src="../gambar/home.png" alt="Agenda Icon" style="height:80px; margin-bottom:4px;">
                            Agenda Rapat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column align-items-center" href="notulen.php">
                            <img src="../gambar/home.png" alt="Notulen Icon" style="height:80px; margin-bottom:4px;">
                            Notulen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column align-items-center" href="absensi.php">
                            <img src="../gambar/home.png" alt="Absensi Icon" style="height:80px; margin-bottom:4px;">
                            Absensi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column align-items-center" href="ruangan.php">
                            <img src="../gambar/home.png" alt="Ruangan Icon" style="height:80px; margin-bottom:4px;">
                            Ruangan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column align-items-center" href="peserta.php">
                            <img src="../gambar/home.png" alt="Peserta Icon" style="height:80px; margin-bottom:4px;">
                            Peserta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column align-items-center" href="datauser.php">
                            <img src="../gambar/home.png" alt="User Icon" style="height:80px; margin-bottom:4px;">
                            User
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal Logout -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Logout</h1>
                    <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Logout Dari Aplikasi?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="../logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5.2.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
