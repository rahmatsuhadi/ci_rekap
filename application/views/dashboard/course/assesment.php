



    <!-- Begin Page Content -->
    <div class="container-fluid">
        
    <a href="<?=base_url().'dashboard/courses/'.$id?>">kembali</a>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?=$course['course_name']?> (<?=$course['code_name']?>)</h1>
        <p class="mb-4">*Bobot Penilaian Diinputan dalam Persen (45.5) = 45.5%</p>

        
        <!-- <div class="input-group mb-3">
            <input placeholder="Cari Mahasiswa?" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
                <button type="button" class="btn btn-primary pl-4 pr-4">Cari</button>
            </div>
        </div> -->
        
        <?php if ($this->session->flashdata('message')): ?>
                <div class="alert alert-info">
                    <?= $this->session->flashdata('message') ?>
                </div>
            <?php endif; ?>

        <!-- DataTales Example -->
        <div class="">
            <div class="table-responsive rounded">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                                            <tr>
                                                <th>#</th>
                                                <th>Penilaian</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>

                                        <?php 
                                        $no = 1;
                                        foreach ($list_component as $component): ?>
                                            <tr>
                                                <td>
                                                <?=$no?>
                                                    </td>
                                                    <td scope="">
                                                        <form method="POST" action="">
                                                            <div class="row">
                                                                <input class="form-control  " type="hidden" name="assessment_id" value="<?=$component['assessment_id']?>"/>
                                                                <div class="col">
                                                                    <input class="form-control  " type="text"  name="assessment_name" value="<?=$component['assessment_name']?>"/>

                                                                </div>
                                                                <div class="col">
                                                                    <input id="weightInput<?=$component['assessment_id']?>" class="weightInput form-control"
                                                                     type="text"  name="weight" value="<?=$component['weight']?>" 
                                                                     
                                                                     />

                                                                </div>
                                                                <div class="col">
                                                                    <input type="submit" id="submitButton<?=$component['assessment_id']?>" value="Ubah" class="btn submitButton bg-success text-white"/>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </td>      
                                                    <td scope="row">

                                                    <button type="button" class="btn btn-sm btn-none" data-toggle="modal" data-target="#delete-modal-<?=$component['assessment_id']?>" type="button">
                                                        <h5 class="btn btn-danger text-white">Hapus</h5>                                                        
                                                    </button>
         
                                                    <div class="modal fade" tabindex="-1" role="dialog" id="delete-modal-<?=$component['assessment_id']?>">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header bg-danger text-white">
                                                                <h5 class="modal-title">Hapus User</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Hapus Penilaiain pada "<?=$component['assessment_name']?>" ini akan menghapus semua nilai yang ada. Setelah proses di laksanakan, Opsi ini tidak bisa dibatalkan. </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                
                                                                 <a href="assessment/<?=$component['assessment_id']?>/delete" class="">
                                                                 <button type="button" class="btn btn-danger">Delete</button>
                                                                </a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                
                                               
                                               
                                            </td>   
                                                
                                            </tr>   
                                            

                                            

                                        <?php 
                                        $no++;
                                        endforeach ?>
                                            <tr>
                                                <td>

                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between w-50">
                                                        <p>Total Penilaian</p> 
                                                        <p class="" id="kalkulasi">0%</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>

                                        <form method="POST" action="<?=base_url().'dashboard/courses/'.$id.'/assessment/store'?>">
                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-4">
                                                            <input required class="form-control"  type="hidden" p name="course_id" value="<?=$id?>" />
                                                                
                                                                <input required class="form-control"  type="text" placeholder="Nama Penilaian"  name="assessment_name" />
                                                                
                                                            </div>
                                                            <div class="col-4">
                                                                <input required class="form-control"  type="text"  name="weight" placeholder="Bobot Penilaian" />
                                                            </div>
                                                            </div>
                                                            
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
    <!-- /.container-fluid -->

    <script>
// Fungsi untuk menghitung total bobot
function calculateTotalWeight() {
    let totalWeight = 0;

    // Ambil semua input dengan kelas 'weightInput'
    const weightInputs = document.querySelectorAll('.weightInput');
    
    // Loop melalui setiap elemen weightInput dan tambahkan nilai ke totalWeight
    weightInputs.forEach(function(input) {
        let weight = parseFloat(input.value);
        if (!isNaN(weight)) {
            totalWeight += weight;
        }
    });

    // Menampilkan total bobot di elemen dengan ID 'kalkulasi'
    document.getElementById('kalkulasi').innerText = totalWeight.toFixed(2) + '%';

    // Mengambil semua tombol submit
    const submitButtons = document.querySelectorAll('.submitButton');

    // Memeriksa jika totalWeight lebih dari 100
    if (totalWeight > 100) {
        // Menonaktifkan semua tombol submit jika total bobot lebih dari 100
        submitButtons.forEach(item => {
            item.disabled = true;
        });
    } else {
        // Mengaktifkan semua tombol submit jika total bobot <= 100
        submitButtons.forEach(item => {
            item.disabled = false;
        });
    }
}

// Menambahkan event listener untuk setiap perubahan input
document.querySelectorAll('.weightInput').forEach(function(input) {
    input.addEventListener('input', calculateTotalWeight);
});

// Panggil fungsi untuk menghitung total bobot saat halaman dimuat
calculateTotalWeight();
</script>
