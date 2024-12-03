<div class="container-lg ps-5 px-lg-3 mt-4 w-100">

    <a href="index.php?id=12345" class="text-decoration-none text-dark">Kembali</a>

    <div class="d-flex justify-content-between">
        <h2 class="font-weight-bold">Pemrograman Web (PW001)</h2>
    </div>

    <div class=" px-3 py-2 mt-2">
        <span class="text-danger">*Bobot Penilaian Diinputkan dalam Persen (45.5) = 45.5%</span>

        <div class="table-responsive mt-2">
            <table class="table table-borderless " id="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Penilaian</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Penilaian List (Data statik untuk contoh) -->
                    <tr>
                        <td>1</td>
                        <td scope="row">
                            <form method="POST" action="?id=12345&action=update">
                                <input class="px-2 py-1" type="hidden" name="assessment_id" value="1"/>
                                <input class="px-2 py-1" type="text" name="assessment_name" value="Ujian Tengah Semester"/>
                                <input class="px-2 py-1" type="text" name="weight" value="40"/>
                                <input type="submit" value="Ubah" class="btn bg-primary text-white"/>
                            </form>
                        </td>
                        <td scope="row">
                            <a href="?assessment_id=1&id=12345&action=delete" class="">
                                <p class="fs-6 font-weight-bold">Hapus</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td scope="row">
                            <form method="POST" action="?id=12345&action=update">
                                <input class="px-2 py-1" type="hidden" name="assessment_id" value="2"/>
                                <input class="px-2 py-1" type="text" name="assessment_name" value="Ujian Akhir Semester"/>
                                <input class="px-2 py-1" type="text" name="weight" value="60"/>
                                <input type="submit" value="Ubah" class="btn bg-primary text-white"/>
                            </form>
                        </td>
                        <td scope="row">
                            <a href="?assessment_id=2&id=12345&action=delete" class="">
                                <p class="fs-6 font-weight-bold">Hapus</p>
                            </a>
                        </td>
                    </tr>

                    <!-- Form Tambah Penilaian -->
                    <form method="POST" action="?id=12345&action=create">
                        <tr>
                            <td></td>
                            <td>
                                <input required class="px-2 py-1" type="text" placeholder="Nama Penilaian" name="assessment_name"/>
                                <input required class="px-2 py-1" type="text" name="weight" placeholder="Bobot Penilaian"/>
                            </td>
                            <td>
                                <input type="submit" value="Tambah" class="btn bg-primary text-white"/>
                            </td>
                        </tr>
                    </form>

                </tbody>
            </table>
        </div>

    </div>

</div>
