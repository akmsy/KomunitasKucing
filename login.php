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
    <div class="hero-section">
        <h1 class="text-center mt-5 fw-bold">Pendaftaran Komunitas Kucing</h1>
    </div>
    <form action="design.php" methode="POST" class="bg-light m-5 p-5">
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
        
        <label for="jnsKel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <input type="radio" id="jnsKel" name="jnsKel" value="Laki-laki"> Laki-laki
        <input type="radio" id="jnsKel" name="jnsKel" value="Perempuan"> Perempuan

        <br>

        <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
        <input type="checkbox" name="hobi" id="hobi" value="Main Game"> Main Game
        <input type="checkbox" name="hobi" id="hobi" value="Ngoding"> Ngoding
        <input type="checkbox" name="hobi" id="hobi" value="Bermain dengan kucing"> Bermain dengan kucing

        <div class="row mb-3">
            <label for="asal" class="col-sm-2 col-form-label">Asal Daerah</label>
            <div class="col-sm-10">
                <input type="text" name="asal" id="asal" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat Ingin Bergabung</label>
            <div class="col-sm-10">
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
            </div>
        </div>

        <button class="btn btn-success btn-center" type="submit" value="kirim">KIRIM PENDAFTARAN</button>
    </form>
</body>
</html>