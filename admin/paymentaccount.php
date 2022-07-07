<?php
include"include/config.php";

 if(isset($_POST['submit'])){
 $r_key = $_POST['r_key'];
 $secrete_key = $_POST['secrete_key'];
 $api_key = $_POST['api_key'];
 $auth_token = $_POST['auth_token'];
 $status = $_POST['status'];
  
  $query="UPDATE payment SET r_key='$r_key',secrete_key='$secrete_key',api_key='$api_key',auth_token='$auth_token',status='$status'";
  $result=mysqli_query($conn,$query);
  if($result){
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <?php
    $sql="SELECT * FROM payment";
    $result=mysqli_query($conn,$sql);
    $arr=mysqli_fetch_assoc($result);
    ?>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <form method="POST">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Payment Settings</h3>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputtext1">Razopay Key</label>
                    <input type="text" class="form-control" name="r_key"id="exampleInputtext1" value="<?php echo $arr['r_key'] ?>"placeholder="text">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputtext1">Razorpay Secrete Key</label>
                    <input type="text" class="form-control" name="secrete_key"id="exampleInputtext1"value="<?php echo $arr['secrete_key'] ?>" placeholder="text">
                  </div>
                  </div>
                  </div>
                  
<div class="row">
  <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputtext1">API Key</label>
                    <input type="text" class="form-control" name="api_key" id="exampleInputtext1"value="<?php echo $arr['api_key'] ?>" placeholder="text">
                  </div>
                  </div>
                   <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputtext1">Auth Token</label>
                    <input type="text" class="form-control" name="auth_token" value="<?php echo $arr['auth_token'] ?>" id="exampleInputtext1" placeholder="text">
                  </div>
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputtext1">Status</label>
                    <select class="form-control" id="exampleInputtext1" name="status" placeholder="text">
                      <option value="1">Active</option>
                      <option value="0">Deactivate</option>
                    </select>

                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
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
