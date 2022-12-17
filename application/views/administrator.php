<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator | Login Page</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/magic/magic.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/Font-Awesome/css/font-awesome.css" />
</head>

<body>
    <!-- PAGE CONTENT -->
    <div class="container">
        <div class="text-center">
            <br />
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-3">
                        &nbsp;
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="text-primary"><b>Halaman Login</b></h2>
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills">
                                    <li class="active"><a href="#petugas" data-toggle="tab">PETUGAS</a>
                                    </li>
                                    <li><a href="#admin" data-toggle="tab">ADMIN</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="petugas">
                                        <h3 class="text-muted">Login ke halaman petugas</h3>
                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <div class="col-lg-12">
                                                    <form action="Login/loginPetugas" method="post" class="form-horizontal">
                                                        <div class="form-group">
                                                            <p class="text-center text-primary">
                                                                Masukkan username dan password
                                                            </p>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                                                <input type="text" name="username" placeholder="Username" class="form-control" required autocomplete="new" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                                                <input type="password" name="password" placeholder="Password" class="form-control" required autocomplete="new-password" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <button class="btn btn-md btn-block btn-success" name="LoginPetugas" type="submit"><i class="icon-signin"></i>
                                                                <b>LOGIN</b>
                                                            </button>
                                                            <button class="btn text-muted btn-md btn-block btn-danger" type="reset"><i class="icon-undo"></i>
                                                                <b>BATAL</b>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="admin">
                                        <h3 class="text-muted">Login ke halaman admin</h3>
                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <div class="col-lg-12">
                                                    <form action="Login/loginAdmin" method="post" class="form-horizontal">
                                                        <div class="form-group">
                                                            <p class="text-center text-primary">
                                                                Masukkan username dan password
                                                            </p>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                                                <input type="text" name="username" placeholder="Username" class="form-control" required autocomplete="new" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                                                <input type="password" name="password" placeholder="Password" class="form-control" required autocomplete="new-password" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <button class="btn btn-md btn-block btn-success" name="LoginAdmin" type="submit"><i class="icon-signin"></i>
                                                                <b>LOGIN</b>
                                                            </button>
                                                            <button class="btn text-muted btn-md btn-block btn-danger" type="reset"><i class="icon-undo"></i>
                                                                <b>BATAL</b>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3">
                        <div class="table-responsive">
                            <h5>Informasi Login</h5>
                            <table class="table table-hover bordered">
                                <tr>
                                    <td colspan="3" class="text-primary"><b>Admin</b></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td class="text-success">admin</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td class="text-success">admin</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-primary"><b>Petugas</b></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td class="text-success">petugas</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td class="text-success">petugas</td>
                                </tr>
                            </table>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    <!--END PAGE CONTENT -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-2.0.3.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>~assets/js/login.js"></script>
    <!--END PAGE LEVEL SCRIPTS -->
</body>

</html>