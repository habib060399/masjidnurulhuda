<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas Masjid | Dashboard</title>

    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo base_url(); ?>/assets/css/layout2.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/timeline/timeline.css" />
    <link href="<?php echo base_url(); ?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/timeline/timeline.css" />

    <link href="../assets/css/jquery-ui.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/uniform/themes/default/css/uniform.default.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/chosen/chosen.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/tagsinput/jquery.tagsinput.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datepicker/css/datepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-fileupload.min.css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- BEGIN BODY -->

    <body class="padTop53 ">

        <!-- MAIN WRAPPER -->
        <div id="wrap">


            <!-- HEADER SECTION -->
            <div id="top">

                <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                    <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                        <i class="icon-align-justify"></i>
                    </a>
                    <!-- LOGO SECTION -->
                    <header class="navbar-header">
                        <a href="index.php" class="navbar-brand">
                            <b class="text-primary">SIMAS Nurul Huda</b>
                        </a>
                    </header>
                    <!-- END LOGO SECTION -->
                    <ul class="nav navbar-top-links navbar-right">

                        <!--ADMIN SETTINGS SECTIONS -->
                        <!-- <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                            </a> -->

                        <ul class="nav navbar-top-links navbar-right">

                            <!--ADMIN SETTINGS SECTIONS -->
                            <li><a href="<?php base_url() ?>/masjid2/masjid/administrator"><i class="icon-signout"></i> Logout </a>

                            </li>
                            <!--END ADMIN SETTINGS -->
                        </ul>
                        <!-- <ul class="dropdown-menu dropdown-user">
                                <li class="divider"></li>
                                <li><a href="../logout.php"><i class="icon-signout"></i> Logout </a>
                                </li>
                            </ul> -->

                        </li>
                        <!--END ADMIN SETTINGS -->
                    </ul>

                </nav>

            </div>
            <!-- END HEADER SECTION -->



            <!-- MENU SECTION -->
            <div id="left">
                <div class="media user-media well-small">
                    <a class="user-link" href="#">
                        <img class="media-object img-thumbnail user-img" alt="User Picture" width="80" height="80" src="<?php echo base_url(); ?>/assets/img/user.png" />
                    </a>
                    <br />
                    <div class="media-body">
                        <h5 class="media-heading"><?php echo $_SESSION["nama_petugas"];
                                                    ?></h5>
                        <ul class="list-unstyled user-info">

                            <li>
                                <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

                            </li>

                        </ul>
                    </div>
                    <br />
                </div>

                <ul id="menu" class="collapse">
                    <?php include_once "menu.php" ?>
                </ul>

            </div>
            <!--END MENU SECTION -->



            <!--PAGE CONTENT -->
            <div id="content">
                <!--memanggil semua page di folder contents -->
                <?php

                if (!isset($_GET['p'])) {
                    include('contents/home.php');
                } else {
                    $page = $_GET['p'];
                    $modul = $_GET['m'];
                    include $modul . '/' . $page . ".php";
                }
                ?>
                <!--berhenti disini-->
            </div>
            <!--END PAGE CONTENT -->

            <!-- RIGHT STRIP  SECTION -->
            <!-- END RIGHT STRIP  SECTION -->
        </div>

        <!--END MAIN WRAPPER -->

        <!-- FOOTER -->
        <div id="footer">
            <p>&copy; Design and Created By <b class="text-danger">FAD Team</b> &nbsp;<?php echo date('Y'); ?> &nbsp;</p>
        </div>
        <!--END FOOTER -->

        <!-- GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/plugins/jquery-2.0.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#TableAuto').dataTable();
            });
        </script>
        <script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.time.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/for_index.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/chosen/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/validVal/js/jquery.validVal.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/formsInit.js"></script>
        <script>
            $(function() {
                formInit();
            });
        </script>
        <script src="<?php echo base_url(); ?>/assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
        <script src="<?php echo base_url(); ?>/assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/validationInit.js"></script>
        <script>
            $(function() {
                formValidation();
            });
        </script>
        <script language="javascript">
            function hanyaAngka(e, decimal) {
                var key;
                var keychar;
                if (window.event) {
                    key = window.event.keyCode;
                } else
                if (e) {
                    key = e.which;
                } else return true;

                keychar = String.fromCharCode(key);
                if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27)) {
                    return true;
                } else
                if ((("0123456789").indexOf(keychar) > -1)) {
                    return true;
                } else
                if (decimal && (keychar == ".")) {
                    return true;
                } else return false;
            }
        </script>
    </body>

</html>