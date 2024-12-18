
<div class="mt-5 mb-5 container-fluid">
    <a href="<?=base_url().'dashboard/courses/'.$id?>" class="btn btn-link text-decoration-none">Kembali ke Daftar Mata Kuliah</a>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h6 class="fw-bold mb-0">Rekap Hasil Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="row gx-5">
                <div class="col-12 col-lg-6 mb-3">
                    <label for="nama_mahasiswa" class="fw-bold">Nama Mahasiswa</label>
                    <h5 class="form-control border-0"><?=$enroll['name']?></h5>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <label for="nim" class="fw-bold">NIM</label>
                    <h5 class="form-control border-0"><?=$enroll['identity']?></h5>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <label for="course_name" class="fw-bold">Mata Kuliah</label>
                    <h5 class="form-control border-0"><?=$enroll['course_name']?></h5>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <label for="final_grade" class="fw-bold">Nilai Final</label>
                    <h5 class="form-control border-0"><?=round($final_grade, 2);?></h5>
                </div>
            </div>

            <?php if ($this->session->flashdata('message')): ?>
                <div class="alert alert-info">
                    <?= $this->session->flashdata('message') ?>
                </div>
            <?php endif; ?>

            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Komponen</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1; // Menambahkan nomor urut
                    foreach ($assessment as $penilaian) {
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$penilaian['assessment_name']?></td>
                        <td>
                            
                    <form method="POST" action="">
                            <input type="hidden" value="<?=$penilaian['grade_id']?>" name="grade_id"/>
                            <input type="hidden" value="<?=$penilaian['assessment_id']?>" name="assessment_id"/>
                            <input type="number" id="gradeInput<?=$penilaian['assessment_id']?>" step="0.01" value="<?=$penilaian['grade']?>" 
                            class="form-control" name="grade" placeholder="Masukkan nilai" oninput="checkGrade(<?=$penilaian['assessment_id']?>)">
                        </td>
                        <td class="text-center weight-input"><?=$penilaian['weight']?>%</td>

                        <td>
                            <div class="d-flex">
                            <button type="submit" id="submitButton<?=$penilaian['assessment_id']?>" class="btn btn-sm mr-2 btn-primary">Simpan</button>
                        </form>
                            <form method="POST" action="">
                                <input type="hidden" value="<?=$penilaian['grade_id']?>" name="grade_id"/>
                                <input type="hidden" value="0" name="grade"/>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            </div>

                        </td>
                        
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                    <tr>
                        <td colspan="2"><strong>Total</strong></td>
                        <td><strong><?=round($final_grade, 2);?></strong></td>
                        <td id="total-weight" class="text-center">0%</td> <!-- Tempat untuk menampilkan total bobot -->
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Fungsi untuk menghitung total bobot
        function updateTotalWeight() {
            let totalWeight = 0;

            // Ambil semua elemen yang berisi bobot (dengan class 'weight-input')
            const weightElements = document.querySelectorAll(".weight-input");

            // Loop untuk menambahkan semua nilai bobot
            weightElements.forEach(function (element) {
                let weight = parseFloat(element.innerText.replace('%', '').trim());  // Ambil nilai bobot dan konversi ke float
                if (!isNaN(weight)) {
                    totalWeight += weight; // Menambahkan ke total
                }
            });

            // Tampilkan total bobot di elemen dengan ID 'total-weight'
            document.getElementById('total-weight').innerText = totalWeight.toFixed(2) + " %";
        }

        // Panggil updateTotalWeight saat DOM dimuat
        updateTotalWeight();
    });
</script>


<script>
// Fungsi untuk memeriksa nilai grade pada setiap baris
function checkGrade(gradeId) {
    var gradeInput = document.getElementById('gradeInput' + gradeId);
    var submitButton = document.getElementById('submitButton' + gradeId);
    var gradeValue = parseFloat(gradeInput.value);

    // Jika nilai grade lebih besar dari 100, tombol submit dinonaktifkan
    if (gradeValue > 100) {
        submitButton.disabled = true;
    } else {
        submitButton.disabled = false;
    }
}
</script>
