<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <a href="<?=base_url().'dashboard/'.$slug_url?>">kembali</a>
                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Registrasi Admin</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                            </div>

                    
                    <form method="post" action="#" id="form-course">
                            <div class="form-group">
                                <label for="inputName">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Mathilda Kusuma" required>
                                <small id="nameHelp" class="form-text text-muted">Nama yang akan ditampilkan</small>
                            </div>


                            <div class="form-group">
                                <label for="inputName">Password</label>
                                <input type="password" name="password" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="*******************" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputIdentity">Identity</label>
                                <input type="text" name="identity" class="form-control" id="inputIdentity" aria-describedby="nomorHelp" placeholder="admin123">
                            </div>

                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="mathilda@gmail.com">
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Tambahkan</button>

                        </form>




                </div>
                <!-- /.container-fluid -->
