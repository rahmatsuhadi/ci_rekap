Sistem Rekapitulasi Data CI
===========================

Berikut adalah contoh dokumentasi proyek yang telah diperbarui dengan format reStructuredText:

Deskripsi


Proyek ini adalah aplikasi web menggunakan CodeIgniter 3 untuk mengelola dan merekap data.

Fitur Utama


1. Autentikasi Pengguna: Login dan validasi pengguna.
2. Pengelolaan Data: Mengelola data pengguna dan rekapitulasi data.
3. Dashboard: Menampilkan laporan rekapitulasi.

Prasyarat


1. PHP 7.4 atau lebih tinggi
2. MySQL atau MariaDB
3. CodeIgniter 3

Instalasi


Langkah Instalasi

1. Clone repositori: `git clone (link unavailable)
2. Ubah pengaturan database di application/config/database.php
3. Buat database di MySQL (misalnya rekap_data)
4. Jalankan aplikasi di browser

Cara Menggunakan


Login

1. Masukkan username dan password.
2. Klik tombol "Login".

Mengelola Data

1. Pilih menu "Data".
2. Lakukan perubahan data.

Rekapitulasi

1. Akses dashboard.
2. Lihat laporan rekapitulasi.

Struktur Direktori


- /application
- /controllers
- /models
- /views
- /assets
- /index.php

Lisensi


MIT License

Konfigurasi


- Ubah $config['base_url'] di application/config/config.php menjadi http://localhost/rekap_v2
- Ubah RewriteBase /rekap_v2 di .htaccess sesuai dengan folder proyek

Catatan


Pastikan Anda memahami instruksi sebelum menjalankan aplikasi.