



    <!-- Begin Page Content -->
    <div class="container-fluid">
        
    <a href="<?=base_url().'dashboard/courses/'.$id?>">kembali</a>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?=$course['course_name']?> (<?=$course['code_name']?>)</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        
        <!-- <div class="input-group mb-3">
            <input placeholder="Cari Mahasiswa?" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
                <button type="button" class="btn btn-primary pl-4 pr-4">Cari</button>
            </div>
        </div> -->

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
                                                                <!-- <input class="form-control  " type="hidden" name="assessment_id" value="<?=$component['assessment_id']?>"/> -->
                                                                <div class="col">
                                                                    <input class="form-control  " type="text"  name="assessment_name" value="<?=$component['assessment_name']?>"/>

                                                                </div>
                                                                <div class="col">
                                                                    <input class="form-control  " type="text"  name="weight" value="<?=$component['weight']?>"/>

                                                                </div>
                                                                <div class="col">
                                                                    <input type="submit" value="Ubah" class="btn bg-success text-white"/>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </td>      
                                                    <td scope="row">
                                                
                                                <a href="?assessment_id=<?=$component['assessment_id']?>&action=delete" class="">
                                                    <h5 class="btn btn-danger text-white">Hapus</h5>
                                                </a>
                                               
                                            </td>   
                                                
                                            </tr>

                                        <?php 
                                        $no++;
                                        endforeach ?>
                                        <form method="POST" action="">
                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-4">
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
