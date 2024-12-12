<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <a href="<?=base_url().'dashboard/courses'?>">kembali</a>
                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Buat Mata Kuliah</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                            </div>

                    
                    <form method="post" action="#" id="form-course">
                            <div class="form-group">
                                <label for="inputName">Nama</label>
                                <input type="text" name="course_name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Nama Mata Kuliah" required>
                                <small id="nameHelp" class="form-text text-muted">Nama akan diperlihatkan pada Dashboard Utama.</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputCode">Kode Mata Kuliah</label>
                                <input type="text" name="code_name" class="form-control" id="inputCode" aria-describedby="codeHelp" placeholder="Kode Mata Kuliah" required>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    
                                    <div class="form-group">
                                        <label for="inputHari">Hari</label>
                                        <select class="form-control" required id="inputHari" name="day">
                                                <option name="Senin">Senin</option>
                                                <option name="Selasa">Selasa</option>
                                            <option name="Rabu">Rabu</option>
                                            <option name="Kamis">Kamis</option>
                                            <option name="Jumat">Jumat</option>
                                            <option name="Sabtu">Sabtu</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputCode">Waktu</label>
                                        <input type="time" name="time" class="form-control" id="inputCode" aria-describedby="codeHelp" placeholder="Code Name">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputHari">Dosen</label>
                                    <select class="form-control" required id="inputHari" name="day">
                                        <?php foreach ($list_dosen as $key => $dosen):

                                        ?>
                                        
                                        <option value="<?=$dosen['user_id']?>"><?=$dosen['name'].' - '.$dosen['identity']?></option>
                                        
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                            </div>
                            
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="isOnlineCheck">
                                <label name="is_online" class="form-check-label" for="isOnlineCheck">Kelas Daring</label>
                                <small id="nameHelp" class="form-text text-muted">Kelas akan dilaksanakan secara Daring Melalui Platform Meeting.</small>
                        
                            </div>

                            <button type="submit" class="btn btn-primary">Tambahkan</button>

                        </form>




                </div>
                <!-- /.container-fluid -->
