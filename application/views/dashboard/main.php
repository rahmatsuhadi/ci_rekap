<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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
                                        <img src="https://i2.wp.com/genshinbuilds.aipurrjects.com/genshin/characters/yae_miko/image.png?strip=all&quality=75&w=256" width="120" height="120"
                                            class="m-auto" alt="...">
                                    </div>
                                    <div>
                                        <h5 class="card-title">Welcome Back</h5>

                                        <div class="mt-4">
                                            <h5 class="font-weight-bold">Rahmat Suhadi</h5>
                                            <p>23.01.4968</p>
                                            <p  class="card-text">Universitas Amikom Yogyakarta</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Content Row -->
                     <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>


                    <div class="d-sm-flex align-items-center justify-content-end mb-4">                        
                        <a href="#" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add Course</a>
                    </div>

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
                                        <?php foreach ($courses as $course): ?>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <h6 class="font-weight-bold"><?=$course['course_name']?></h6>
                                                        <span><?=$course['code_name']?></span>
                                                    </div>
                                                </td>
                                                <td><?=$course['instructor']?></td>
                                                <td><?=$course['time']?></td>
                                                <td>Yes</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-danger">
                                                        <i class="fas fa-solid fa-trash text-danger"></i>                                                        
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                   



                </div>
                <!-- /.container-fluid -->

          