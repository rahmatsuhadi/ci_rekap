<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                <a href="<?=base_url().'dashboard/'.$slug_url?>">kembali</a>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title_page?>  </h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>


                    <div class="d-sm-flex align-items-center justify-content-between mb-4">        
                    
                    <div class="input-group w-25">
                        <!-- <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div> -->
                        <input type="text" class="form-control" placeholder="Pencarian" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <!-- <span class="input-group-text">.00</span> -->
                            <button class="btn btn-primary">Cari</button>
                        </div>
                        </div>
                    
                        <a class="d-none d-sm-inline-block btn btn-primary shadow-sm"  href="<?=$slug_url.'/create'?>">
                            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah</a>
                    </div>

                        <!-- Table Mata Kuliah -->

                    <div class="">
                        <div class="table-responsive rounded">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Identity</th>
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
                                        <?php foreach ($list_users as $user): ?>
                                            <tr>
                                                <td>
                                                        <a href="courses/<?=$user['user_id']?>">
                                                            <h6 class="font-weight-bold"><?=$user['name']?></h6>
                                                        </a>
                                                    </td>
                                                    <td><?=$user['email']=="" ? "-" : $user['email']?></td>
                                                    <td><?=$user['identity']?></td>
                                                    <td><?=$user['status']?></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete-modal-<?=$user['user_id']?>" type="button">
                                                        <i class="fas fa-solid fa-trash text-danger"></i>                                                        
                                                    </button>
         
                                                    <div class="modal fade" tabindex="-1" role="dialog" id="delete-modal-<?=$user['user_id']?>">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header bg-danger text-white">
                                                                <h5 class="modal-title">Hapus User</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Hapus User "<?=$user['name']?>" dengan role <b><?=$user['role']?></b>. Setelah proses di laksanakan, Opsi ini tidak bisa dibatalkan. </p>
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
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                   



                </div>
                <!-- /.container-fluid -->


                