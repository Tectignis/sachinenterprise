<?php 
include("../include/config.php"); 

if(isset($_POST['submit'])){
    $logo = $_FILES['logo']['name'];
    $filedet=$_FILES['logo']['tmp_name'];
    $loc="logo/".$select_logo;
    move_uploaded_file($filedet,$loc);
 
    $image=$_FILES['image']['name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $extension=substr( $image,strlen( $image)-4,strlen( $image));
    $all_extension = array(".jpg","jpeg",".png","gif");
    if(!in_array($extension,$all_extension)){
      $msg="Invalid format. Only jpg / jpeg/ png /gif format allowed";
    } 
        else{
          $image=md5($image).$extension;
    $dnk=$_FILES['image']['tmp_name'];

    
    $loc="logo/".$image;
    move_uploaded_file($dnk,$loc);
        
            }
    
    
  
  $sql=mysqli_query($conn,"INSERT INTO `services`(`logo`,`image`,`title`,`description`) 
    VALUES ('$logo','$image','$title','$description')");
  
  if($sql==1){
  header("location:s_table.php");
  }
  else
  echo 'connection failed';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("include/header.php"); ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include("include/sidebar.php"); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Get </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">New Enquires</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="post" enctype="multipart/form-data">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <div class="card-body">
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Select Logo :</label>
                  <input type="file" class="form-control" value="" name="logo" >
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <label>Select Image :</label>
                  <input type="file" class="form-control" value="" name="image" >
                </div>
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Title :</label>
                  <input type="text" name="title"  class="form-control">
                </div>
                <!-- /.form group -->
                
                <!-- time Picker -->
                <div class="form-group">
                  <label>Discription :</label>
                 <textarea type="text" name="description" id="descriptionid" class="form-control "></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (left) -->
        
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
      
        <!-- /.row -->
       
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php"); ?>


  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->

</body>
</html>
