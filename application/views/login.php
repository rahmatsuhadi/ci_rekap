<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url().'assets/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: #f8f9fc;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        </style>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        

    <!-- Custom styles for this template-->
    <link href="<?=base_url().'assets/css/sb-admin-2.css'?>" rel="stylesheet">

</head>

<body class="">

<div class="container">
        <div class="row justify-content-center align-items-center " style="height: 100vh;">
    
            <div class="col-md-6">                      
                        
                <div class="card shadow-lg ">
                    <div class="card-header bg-primary">
                        
                    <h4 class="card-title text-center my-4 text-white font-weight-bold">Silahkan Login Terlebih Dahulu</h4>
                
                </div>
                    <div class="card-body p-5">
                        <div class="w-full d-flex justify-content-center mb-4">
                            <img width="240" class="m-0" height="90" src="https://amikom.ac.id/theme/material/custom/images/logos/icon_text/icontext_amikom_100p.png" alt="">

                        </div>                 

                          <!-- Menampilkan pesan error jika ada -->
                          <?php if ($this->session->flashdata('error')): ?>
                            <div style="color: red;">
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url().'auth/action_login'?>" method="post">
                            <!-- Email Input -->
                            <div class="form-group">
                                <input type="text" name="identity" value="<?php echo set_value('identity'); ?>" class="form-control" id="inputIdentity" placeholder="Enter Identity" required>
                                
                                <span class="text-danger" style="font-size:12px;"><?php echo form_error('identity'); ?> </span>
                                      
                            </div>
                            <!-- Password Input -->
                            <div class="form-group">
                                <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" id="inputPassword" placeholder="Password" required>
                                <span class="text-danger" style="font-size:12px;"><?php echo form_error('password'); ?> </span>
                            </div>
                            
                            <!-- Remember Me Checkbox -->
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <!-- Login Button -->
                            <button type="submit" class="btn bg-primary text-white font-weight-bold btn-block">Masuk</button>
                        </form>
                        <!-- <hr> -->
                        <!-- Social Media Login Buttons -->
                        <!-- <button type="button" class="btn btn-danger btn-block mb-2">
                            <i class="fab fa-google"></i> Login with Google
                        </button>
                        <button type="button" class="btn btn-primary btn-block">
                            <i class="fab fa-facebook-f"></i> Login with Facebook
                        </button> -->
                        <!-- <hr> -->
                        <!-- <div class="text-center">
                            <a href="forgot-password.html" class="small">Forgot Password?</a>
                        </div> -->
                        <!-- <div class="text-center">
                            <a href="register.html" class="small">Create an Account!</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url().'assets/jquery/jquery.min.js'?>"></script>
    <script src="<?=base_url().'assets/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url().'assets/jquery-easing/jquery.easing.min.js'?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url().'assets/js/sb-admin-2.min.js'?>"></script>

</body>

</html>