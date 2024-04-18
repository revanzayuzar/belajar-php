<!-- Halaman Listing Product -->

<?php

session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Jika belum login, arahkan kembali ke halaman login
    header("Location: ../../login.php");
    exit;
}

?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/icon/icon.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Listing Product</title>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg position-fixed top-0 z-3 w-100 bg-dark p-2">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="listing_product.php"><img src="../img/icon/icon.jpg" alt="Logo" width="40px" class="rounded-circle"></a>
            <a class="text-light text-decoration-none" href="logout.php"><small>Logout<i class="bi bi-arrow-right-square" style="margin-left: 5px;"></i></small></a>
        </div>
    </nav>

    <!-- Listing Product -->
    <div class="album bg-dark-subtle py-5">
        <div class="container py-5">
            <h1 class="fs-3" style="margin-bottom: 15px;">Listing Product</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <!-- Array PHP Start -->
                <?php

                // Baca data gambar product dari file
                $gambar_01 = file_get_contents('../img/product/iphone-15-pro-max.jpg');
                $gambar_01_base64 = base64_encode($gambar_01);

                $gambar_02 = file_get_contents('../img/product/iphone-14-pro-max.jpg');
                $gambar_02_base64 = base64_encode($gambar_02);

                $gambar_03 = file_get_contents('../img/product/iphone-13-pro-max.jpg');
                $gambar_03_base64 = base64_encode($gambar_03);

                // Membuat array gambar dan info product
                $array_product = array(
                    array(
                        'tipe' => 'image/jpg',
                        'data' => $gambar_01_base64,
                        'nama' => 'iPhone 15 Pro Max',
                        'harga' => 'Rp 22.999.000,00',
                        'tahun' => '2023',
                        'kapasitas' => '256 GB, 512 GB, 1 TB',
                        'warna' => 'Titanium Hitam, Titanium Putih',
                        'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est perspiciatis voluptatum nostrum quasi placeat.'
                    ),
                    array(
                        'tipe' => 'image/jpg',
                        'data' => $gambar_02_base64,
                        'nama' => 'iPhone 14 Pro Max',
                        'harga' => 'Rp 20.999.000,00',
                        'tahun' => '2022',
                        'kapasitas' => '128 GB, 256 GB, 512 GB, 1 TB',
                        'warna' => 'Perak, emas, hitam pekat',
                        'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est perspiciatis voluptatum nostrum quasi placeat.'
                    ),
                    array(
                        'tipe' => 'image/jpg',
                        'data' => $gambar_03_base64,
                        'nama' => 'iPhone 13 Pro Max',
                        'harga' => 'Rp 18.999.000,00',
                        'tahun' => '2021',
                        'kapasitas' => '128 GB, 256 GB, 512 GB, 1 TB',
                        'warna' => 'Grafit, emas, perak',
                        'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est perspiciatis voluptatum nostrum quasi placeat.'
                    )
                );

                ?>
                <!-- Array PHP End -->

                <!-- Foreach Start -->
                <?php

                foreach ($array_product as $product) {

                ?>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="../img/product/iphone-15-pro-max.jpg" class="object-fit-cover m-3" style="height: 250px;">
                            <div class="card-body">
                                <h1 class="fs-5"><?php echo $product['nama']; ?></h1>
                                <h2 class="fs-6">Tahun Peluncuran: <?php echo $product['tahun']; ?></h2>
                                <h2 class="fs-6">Harga: <?php echo $product['harga']; ?></h2>
                                <h2 class="fs-6">Kapasitas: <?php echo $product['kapasitas']; ?></h2>
                                <h2 class="fs-6">Warna: <?php echo $product['warna']; ?></h2>
                                <h2 class="fs-6">Deskripsi Singkat:</h2>
                                <p class="card-text"><?php echo $product['deskripsi']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-secondary">Revan Store</small>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i> Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php

                }

                ?>
                <!-- Foreach End -->

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-dark text-light text-center px-3 py-3">
        <p class="m-0">Copyright &copy; 2024</p>
        <hr>
        <p class="m-0">Design by M. Revanza Yuzar</p>
        <p class="m-0">Full Stack Web Developer</p>
        <p class="m-0">PT Arkatama Multi Solusindo</p>
        <p class="m-0">MSIB BATCH 6</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>