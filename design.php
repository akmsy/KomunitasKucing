<?php
    session_start();
    include "koneksi.php";

    if (!isset($_SESSION['loged_in']) || $_SESSION['loged_in'] !== true){
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Design</title>
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php' ?>

    <!-- Design Page -->
     <div class="hero-section m-5">
        <div class="hero-content mx-auto p-2 text-center">
            <h1 class="fst-italic mb-3">Design Laboratory</h1>
            <figcaption>Image Effects</figcaption>
            <img class="mx-auto d-block" src="kucing.jpg" alt="foto-kucing">
        </div>
     </div>
</body>
</html>