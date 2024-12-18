===========================
Sistem Rekapitulasi Data CI
===========================

Deskripsi
---------
Proyek ini adalah aplikasi web menggunakan **CodeIgniter 3** untuk mengelola dan merekap data. Aplikasi ini mencakup sistem login, pengelolaan data, dan rekapitulasi data yang dapat diakses melalui dashboard.

Fitur Utama
------------
- Autentikasi pengguna (Login).
- Pengelolaan data pengguna dan rekapitulasi data.
- Dashboard untuk menampilkan laporan rekapitulasi.

Prasyarat
----------
- PHP (7.4 atau lebih tinggi).
- MySQL (atau MariaDB).
- CodeIgniter 3.

Instalasi
---------
1. Clone repositori:
git clone https://github.com/username/project-ci-rekapitulasi.git cd project-ci-rekapitulasi


2. Ubah pengaturan database di **application/config/database.php**.

3. Buat database di MySQL (misalnya `rekap_data`).

4. Jalankan aplikasi di browser:

Cara Menggunakan
----------------
1. Login menggunakan akun yang telah dibuat.
2. Akses dashboard untuk melihat rekapitulasi data.
3. Pengguna admin dapat mengelola data melalui menu yang tersedia.

Struktur Direktori
------------------
/application /controllers # Controller untuk aplikasi /models # Model untuk pengelolaan data /views # Views untuk tampilan antarmuka /assets # Berisi file CSS, JS, dan gambar /index.php # Entri utama aplikasi


Konfigurasi


- Ubah $config['base_url'] di application/config/config.php menjadi http://localhost/rekap_v2
- Ubah RewriteBase /rekap_v2 di .htaccess sesuai dengan folder proyek


Lisensi
--------
MIT License

