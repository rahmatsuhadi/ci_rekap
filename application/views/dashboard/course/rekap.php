



    <!-- Begin Page Content -->
    <div class="container-fluid">
    <a href="<?=base_url().'dashboard/courses/'?>">kembali</a>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?=$course['course_name']?> (<?=$course['code_name']?>)</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <div class="d-sm-flex align-items-center justify-content-end mb-4">      
        <a class="d-none d-sm-inline-block btn btn-primary shadow-sm" href="<?=$id.'/assessment'?>">
        <i class="fas fa-plus fa-sm text-white-50"></i> Ubah Konfigurasi Penilaian 

        </a>                  
            <!-- <button data-toggle="modal" data-target="#modal-create" type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> -->
        <!-- </button> -->
        </div>
        
        <div class="input-group mb-3">
            <input placeholder="Cari Mahasiswa?" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
                
                <button type="button" class="btn btn-primary pl-4 pr-4">Cari</button>
            </div>
        </div>

         <!-- Content Row -->
         <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Siswa</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?=$total_students;?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Siswa Sudah Dinilai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?=$total_students_graded?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Siswa Belum dinilai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?=$total_students_not_graded?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Content Row -->

        <!-- DataTales Example -->
        <div class="">
            <div class="table-responsive rounded">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Name</th>
                                                <th>Identity</th>
                                                <th>Dinilai</th>
                                                <th>Status</th>
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

                                        <?php foreach ($list_students_course as $user): ?>
                                            <tr>
                                                <td>
                                                        <a href="<?=$id.'/rekap/'.$user['enrollment_id']?>">
                                                            <h6 class="text-primary font-weight-bold"><?=$user['name']?></h6>
                                                        </a>
                                                    </td>

                                                    <td><?=$user['identity']?></td>
                                                    <td><?=$user['grade_id'] ? 'Ya' : 'Tidak' ?>
                                                    <td><?=$user['status']?></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete-modal-<?=$user['user_id']?>" type="button">
                                                        <i class="fas fa-solid fa-trash text-danger"></i>                                                        
                                                    </button>
         
                                                    <div class="modal fade" tabindex="-1" role="dialog" id="delete-modal-<?=$user['user_id']?>">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header bg-danger text-white">
                                                                <h5 class="modal-title">Hapus Mahasiwa</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Hapus Mahasiswa "<?=$user['name']?>" dari <b><?=$course['course_name']?></b>. Setelah proses di laksanakan, Opsi ini tidak bisa dibatalkan. </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-danger">Delete</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                </td>
                                                
                                            </tr>
                                        <?php endforeach ?>

                                        </tbody>
                                    </table>
        </div>
        </div>
    </div>
    <!-- /.container-fluid -->


    <!-- Modal -->
<!-- <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modal-deleteLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center"> <i class="fas fa-solid fa-exclamation text-danger" ></i></p>
        <h5 class="text-center">Are Your Sure?</h5>
        <p>Do your realy want to delete these records? This process cannot be undone</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div> -->
