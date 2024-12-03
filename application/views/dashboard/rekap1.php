<div class="container mt-4 mb-5" >
    <a href="index.php?id=12345" class="text-decoration-none text-dark">Kembali</a>

    <div class=" px-3 py-2 mt-2">

        <h6 class="font-weight-bold">Rekap Hasil Mahasiswa</h6>

        <div class="row gx-5 pt-2">
            <div class="col-12 col-lg-6">
                <div class="mb-3">
                    <label for="nama_mahasiswa" class="font-weight-bold form-label">Nama Mahasiswa</label>
                    <h5 class="form-control border-0">
                        John Doe
                    </h5>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mb-3">
                    <label for="nim" class="font-weight-bold form-label">NIM</label>
                    <h5 class="form-control border-0">
                        123456789
                    </h5>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mb-3">
                    <label for="mata_kuliah" class="font-weight-bold form-label">Mata Kuliah</label>
                    <h5 class="form-control border-0">
                        Pemrograman Web
                    </h5>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mb-3">
                    <label for="nilai_final" class="font-weight-bold form-label">Nilai Final</label>
                    <h5 class="form-control border-0">
                        85.50
                    </h5>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Komponen</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Penilaian -->
                <tr>
                    <td>1</td>
                    <td>Ujian Tengah Semester</td>
                    <td>
                        <input type="text" value="80" class="form-control grade-input" name="grade" placeholder="Enter grade">
                    </td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-sm btn-success">Simpan</button>
                            <a class="btn btn-danger btn-sm text-white" href="#">Hapus</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ujian Akhir Semester</td>
                    <td>
                        <input type="text" value="90" class="form-control grade-input" name="grade" placeholder="Enter grade">
                    </td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-sm btn-success">Simpan</button>
                            <a class="btn btn-danger btn-sm text-white" href="#">Hapus</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Quiz Mingguan</td>
                    <td>
                        <input type="text" value="88" class="form-control grade-input" name="grade" placeholder="Enter grade">
                    </td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-sm btn-success">Simpan</button>
                            <a class="btn btn-danger btn-sm text-white" href="#">Hapus</a>
                        </div>
                    </td>
                </tr>

                <!-- Baris Total -->
                <tr>
                    <td colspan="2"><strong>Total</strong></td>
                    <td><strong>85.50</strong></td>
                    <td><strong>100%</strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
