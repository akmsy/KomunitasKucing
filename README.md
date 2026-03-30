# KomunitasKucing
latihan kuis Praktikum Pemrograman Web Dasar

Database yang digunakan -> komunitas_kucing. Dengan tabel anggota

Sudah saya cantumkan tabel structure di anggota.sql

atau bisa masukkan query di phpMyAdmin
```bash
CREATE TABLE anggota (
    id INT(3) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    tglLahir DATE,
    kelUmur ENUM('Anak-anak', 'Remaja', 'Dewasa'),
    jnsKel ENUM('Laki-laki', 'Perempuan'),
    hobi ENUM('Main Game', 'Ngoding', 'Bermain dengan kucing')
);
```