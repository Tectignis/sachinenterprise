<?php
include("include/config.php");
if(isset($_POST['submit'])){
  $select_logo = $_POST['select_logo'];
  $select_favicon = $_POST['select_favicon'];
  $sidebar_header = $_POST['sidebar_header'];
  $sidebar_header_icon = $_POST['sidebar_header_icon'];
  $contact_email_message = $_POST['contact_email_message'];
  $address = $_POST['address'];
  $contact_phone = $_POST['contact_phone'];
  $contact_email = $_POST['contact_email'];
  $google_map = $_POST['google_map'];
  $time_zone = $_POST['time_zone'];
  
  
  $sql="UPDATE `general_settings` SET select_logo='$select_logo',select_favicon='$select_favicon',sidebar_header='$sidebar_header',      sidebar_header_icon='$sidebar_header_icon', contact_email_message='$contact_email_message', address='$address',contact_phone='$contact_phone',contact_email='$contact_email', google_map='$google_map', time_zone='$time_zone'";
  if(mysqli_query($conn, $sql)){
    echo"<script>alert('Successfully Updated');</script>";
  }
  else{
    echo"<script>alert('Not Updated');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include"include/header.php" ?>

    <!-- Main Sidebar Container -->

    <?php include"include/sidebar.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?php
          $sql=mysqli_query($conn,"select * from general_settings");
          while($arr=mysqli_fetch_array($sql)){
          ?>
          <div class="row">
            <div class="col-12">
              <form method="POST">
             <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General Settings</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="col-12">Existing Logo</label>
                    <img src="#">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Logo</label>
             <input type="file" class="form-control" value="<?php echo $arr['select_logo'];?>" name="select_logo" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="col-12">Existing Favicon</label>
                    <img src="#">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Favicon</label>
                    <input type="file" class="form-control" name="select_favicon" id="exampleInputEmail1" value="<?php echo $arr['select_favicon'];?>" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">Sidebar Header</label>
                    <input type="te" class="form-control" name="sidebar_header" id="exampleInputtext1" value="<?php echo $arr['sidebar_header'];?>" placeholder="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">Sidebar Header Icon</label>
                    <input type="text" class="form-control" name="sidebar_header_icon" id="exampleInputtext1" value="<?php echo $arr['sidebar_header_icon'];?>" placeholder="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">Email For Send Contact Message</label>
                    <input type="text" value="<?php echo $arr['contact_email_message'];?>" class="form-control" name="contact_email_message" id="exampleInputtext1" placeholder="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">Address</label>
                    <textarea class="form-control" value="<?php echo $arr['address'];?>" name="address" id="exampleInputtext1" placeholder="text"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">Contact Phone</label>
                    <input type="text" value="<?php echo $arr['contact_phone'];?>" class="form-control" name="contact_phone" id="exampleInputtext1" placeholder="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputtext1">Contact Email</label>
                    <input type="email" value="<?php echo $arr['contact_email'];?>" class="form-control" name="contact_email" id="exampleInputtext1" placeholder="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">Google Map Embed Code</label>
                    <textarea class="form-control" value="<?php echo $arr['google_map'];?>" name="google_map" id="exampleInputtext1" placeholder="text"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">Time Zone</label>
                    <select class="form-control" value="<?php echo $arr['time_zone'];?>" id="exampleInputtext1" name="time_zone" placeholder="text">
                                            <option>Select</option>

                      <option>skjefnlfnsdfn</option>
                      <option>skjefnlfnsdfn</option>
                      <option>skjefnlfnsdfn</option>


                    </select>

                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php } ?>
              </div>
            </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include"include/footer.php" ?>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>