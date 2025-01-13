<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <i class="fa-brands fa-android"></i> -->
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>


                    <div class="row">
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card mb-3">
                                <div class="card-header bg-primary">
                                    <h6 class="text-white font-weight-bold ">
                                        Profile Dosen
                                    </h6>
                                </div>
                                <div class="card-body flex-column flex-md-row d-flex">
                                    <div class="d-flex border  mx-sm-3">
                                        <img src="https://avatar.iran.liara.run/public/17" width="120" height="120"
                                            class="m-auto" alt="...">
                                    </div>
                                    <div>
                                        <h5 class="card-title">Welcome Back</h5>

                                        <div class="mt-4">
                                        

                                            <h5 class="font-weight-bold"><?=$this->session->userdata('role');?></h5>
                                            <p><?=$this->session->userdata('name');?></p>
                                            <p  class="card-text">Universitas Amikom Yogyakarta</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     


                    <!-- <div class="d-sm-flex align-items-center justify-content-end mb-4">                        
                        <a class="d-none d-sm-inline-block btn btn-primary shadow-sm"  href="<?=base_url().'dashboard/courses/create'?>">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Add Course</a>
                    </div> -->

                        <!-- Table Mata Kuliah -->

                    <div class="">
                        <div class="table-responsive rounded">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Courses</th>
                                                <th>Lecturer</th>
                                                <th>Time</th>
                                                <th>Online</th>
                                                <!-- <th>Action</th> -->
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
                                        <?php foreach ($courses as $course): ?>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <a href="<?= base_url($role=="mahasiswa" ? "dashboard/courses/rekap/".$course['enrollment_id'] : "dashboard/courses/".$course['course_id'])?>">
                                                            <h6 class="font-weight-bold"><?=$course['course_name']?></h6>
                                                        </a>
                                                        <span><?=$course['code_name']?></span>
                                                    </div>
                                                </td>
                                                <td><?=$course['instructor']?></td>
                                                <td><?=$course['time']?></td>
                                                <td ><?=$course['is_online']=="1" ? "Online" : "Offline"?></td>
                                                <!-- <td>
                                                    <button type="button" class="btn btn-outline-danger">
                                                        <i class="fas fa-solid fa-trash text-danger"></i>                                                        
                                                    </button>
                                                </td> -->
                                            </tr>
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                   



                </div>
                <!-- /.container-fluid -->
