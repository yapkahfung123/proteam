<?php
require APPROOT .'/views/admins/inc/login/header.php';
?>

    <style>
        .bg-white{
            background-color: rgb(61,99,210) !important;
            color: white;
        }
    </style>

<body class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
    <!--                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php if(isset($_GET['failed'])){
                                        flash_template('Incorrect Credential', 'alert alert-danger');
                                    }?>
                                    <form action="" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Username" name="uname" value="<?= isset($_COOKIE['admin_uname'])? $_COOKIE['admin_uname']:'';?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" placeholder="Password" name="pword" value="<?= isset($_COOKIE['admin_pword'])? $_COOKIE['admin_pword']:'';?>">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember" <?= isset($_COOKIE['admin_uname']) && isset($_COOKIE['admin_pword'])? 'checked':'';?>>
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
    <!--                                    <hr>-->
    <!--                                    <a href="index.html" class="btn btn-google btn-user btn-block">-->
    <!--                                        <i class="fab fa-google fa-fw"></i> Login with Google-->
    <!--                                    </a>-->
    <!--                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">-->
    <!--                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook-->
    <!--                                    </a>-->
                                    </form>
    <!--                                <hr>-->
    <!--                                <div class="text-center">-->
    <!--                                    <a class="small" href="forgot-password.html">Forgot Password?</a>-->
    <!--                                </div>-->
    <!--                                <div class="text-center">-->
    <!--                                    <a class="small" href="register.html">Create an Account!</a>-->
    <!--                                </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require APPROOT .'/views/admins/inc/login/footer.php';
?>