<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Daftar</title>
</head>
<body>
    <!-- Navbar -->
    <?php $page = 'login'; ?>
    <?php include 'navbar.php' ?>

    <!-- Daftar Page -->
    <div class="hero-section m-5">
        <h1 class="text-center fw-bold">Pendaftaran Komunitas Kucing</h1>
    </div>

    <form action="proses_login.php" method="POST" class="bg-light m-5 p-5 w-75 mx-auto">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="tglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" id="tglLahir" name="tglLahir" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="kelUmur" class="col-sm-2 col-form-label">Kelompok Umur</label>
            <div class="col-sm-10">
                <select class="form-select rounded" id="kelUmur" name="kelUmur">
                    <option selected>Pilih kelompok umur</option>
                    <option value="Anak-anak">Anak-anak</option>
                    <option value="Remaja">Remaja</option>
                    <option value="Dewasa">Dewasa</option>
                </select>
            </div> 
        </div>
        
        <div class="row mb-3">
        <label for="jnsKel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <input type="radio" id="jnsKel" name="jnsKel" value="Laki-laki"> Laki-laki <br>
                <input type="radio" id="jnsKel" name="jnsKel" value="Perempuan"> Perempuan
            </div>
        </div>

        <div class="row mb-3">
            <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
            <div class="col-sm-10">
                <input type="checkbox" name="hobi" id="hobi" value="Main Game"> Main Game <br>
                <input type="checkbox" name="hobi" id="hobi" value="Ngoding"> Ngoding <br>
                <input type="checkbox" name="hobi" id="hobi" value="Bermain dengan kucing"> Bermain dengan kucing
            </div>
        </div>

        <div class="row mb-3">
            <label for="asal" class="col-sm-2 col-form-label">Asal Daerah</label>
            <div class="col-sm-10">
                <input type="text" name="asal" id="asal" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat Ingin Bergabung</label>
            <div class="col-sm-10">
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
            </div>
        </div>

        <div class="align-items-center d-flex justify-content-center">
            <button class="btn btn-success" type="submit" value="kirim">KIRIM PENDAFTARAN</button>
        </div>
    </form>

    <!-- Footer -->
    <?php include 'footer.php' ?>
</body>
</html>