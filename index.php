<?php
    session_start();
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Komunitas Kucing</title>
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php' ?>

    <!-- Home Page -->
    <div class="hero-section m-5">
        <?php
            if (isset($_SESSION['login_error'])){
                echo '<div class = "error-message show">';
                echo htmlspecialchars($_SESSION['login_error']);
                echo'</div>';
                unset($_SESSION['login_error']);
            }
        ?>
        <h1 class="fst-italic mb-3">Selamat Datang di Komunitas Kucing</h1>
        <div class="hero-content row g-0 align-items-start">
            <div class="col-md-3">
                <img class="border border-5 img-fluid rounded-5 border-warning" src="kucing.jpg" alt="foto-kucing">
            </div>
            <div class="col-md-9 ps-4">
                <p class="text-danger mt-3">Kucing adalah hewan mamalia kecil yang dikenal dengan sifatnya yang licah, anggun, dan penuh rasa ingin tahu. Tubuhnya lentur dengan bulu lembut yang beragam warna, serta mata tajam yang mampu melihat jelas di kondisi minim cahaya. Kucing termasuk hewan karnivora, namun dapat beradaptasi hidup bersama manusia sebagai hewan peliharaan. Mereka memiliki kebiasaan mencakar untuk menandai wilayah, merawat diri dengan menjilat bulunya, serta tidur dalam waktu lama, bisa mencaai 12-16 jam per hari. Kucing sering dianggap membawa kenyamanan dan kasih sayang, sehingga menjadi salah satu hewan peliharaan paling populer di dunia.</p>
    
                <p class="text-primary">Kucing seperti anjing termasuk hewan penyayang. Riset yang dilakukan scientificamerican mengungkapkan kucing mempelajari sendiri cara mengeluarkan bunyi meow yang bisa menarik perhatian manusia. Berikut Macam-Macam Kucing:</p>
    
                <h3>Jenis-Jenis Kucing:</h3>
                <ol>
                    <li>Kucing Garong</li>
                    <li>Kucing Mainan</li>
                    <li>Kucing Tuan Muda</li>
                    <li>Kucing Nakal</li>
                    <li>dll.</li>
                </ol>
            </div>
        </div>

        <br>
        <a class="btn btn-primary" href="https://wolipop.detik.com" target="_blank" role="button">Informasi Lebih Lanjut</a>
</body>
</html>