<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yummy Admin | Ganti Password</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url().'assets/sb/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/sb/font-awesome/css/font-awesome.css'?>" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url().'assets/sb/css/sb-admin.css'?>" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'Ctrl_admin/index'?>">YUMMY</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                  <span>Welcome, <?php echo $this->session->userdata('username'); ?>!</span>
                </li>
                <li>
                    <a href="<?php echo base_url().'Ctrl_admin/change_password'?>" title="Ganti Password"><i class="fa fa-edit fa-fw"></i></a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Ctrl_admin/logout'?>" title="Keluar"><i class="fa fa-power-off fa-fw"></i></a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'Ctrl_admin/index'?>"><i class="fa fa-book fa-fw"></i> Daftar Pesanan</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Menu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'Ctrl_admin/menu'?>">Daftar Menu</a>
                                </li>
                            </ul>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'Ctrl_admin/add_menu'?>">Tambah Menu</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Ctrl_admin/feedback'?>"><i class="fa fa-dashboard fa-fw"></i> Feedback Pengunjung</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">Ganti Password</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-6">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-8">
                                  <form action="<?php echo base_url().'Ctrl_admin/update_pass'?>" method="post" role="form">
                                      <!-- <div class="form-group">
                                          <label for="disabledSelect">Username</label>
                                          <input class="form-control" id="disabledInput" type="text" name="username" value="<?php echo $this->session->userdata('username'); ?>" disabled>
                                      </div> -->
                                      <div class="form-group">
                                          <label>Password Lama</label>
                                          <input type="password" name="old_pass" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Password Baru</label>
                                          <input type="password" name="password" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Konfirmasi Password Baru</label>
                                          <input type="password" name="konf_newpass" class="form-control" required>
                                      </div>
                                      <input type="submit" class="btn btn-primary" name="submit">
                                  </form>
                              </div>
                              <!-- /.col-lg-8 (nested) -->
                          </div>
                          <!-- /.row (nested) -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/sb/js/jquery-1.10.2.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/plugins/metisMenu/jquery.metisMenu.js'?>"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo base_url().'assets/sb/js/plugins/dataTables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/plugins/dataTables/dataTables.bootstrap.js'?>"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/sb/js/sb-admin.js'?>"></script>

</body>

</html>
