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
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
              </a>

              <ul class="dropdown-menu dropdown-user">
                <li class="divider"></li>
                <li><a href="<?php base_url() ?>/masjid2/masjid/administrator"><i class="icon-signout"></i> Logout </a>
                </li>
              </ul>

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
            <h5 class="media-heading"></h5>
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