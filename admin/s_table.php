<?php
include("../include/config.php"); 

if(isset($_POST['subm'])){
$id=$_POST['id'];
  $logo=$_POST['logo'];
  $title=$_POST['title'];
  $description=$_POST['description'];
  $image=$_FILES['image']['name'];
  $dnk=$_FILES['image']['tmp_name'];
    $loc="logo/".$image;
    move_uploaded_file($dnk,$loc);
  $sql=mysqli_query($conn,"UPDATE `services` SET `logo`='$logo',`image`='$image',`title`='$title',`description`='$description' WHERE id='$id'");

}





if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from services where id='$id'");
  

  if($sql=1){
      header("location:s_table.php");
  }
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
              <li class="breadcrumb-item active">Get</li>
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
              <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Logo</th>
                                                <th>Image No</th>
                                                <th>Title</th>
                                                 <th>Description</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from `services`");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                            <tr>
                                                <td> <?php echo $count;?> </td>
                                                <td><i class="<?php echo $arr['logo'];?>"></i></td>
                                                <td> <img src="logo/<?php echo $arr['image'];?>" width="50" height="50"> </td>
                                                <td> <?php echo $arr['title'];?></td>
                                                
                                                <td> <?php echo $arr['description'];?></td>
                                                
                                              <td style="">
                          <table>
                          <tbody>
                          <tr>
                          <td class="p-2">
                          <div>
                            <button class="btn btn-default btn-xs dnkediti" data-id='<?php echo $arr['id']; ?>'><i class="fas fa-eye"></i></button> 
                                              </div></td>
                                              
                                              <td class="p-2">
                           
                                              <button class="btn btn-info btn-xs dnkd1" data-toggle="modal" data-target="#dnk1" data-id='<?php echo $arr['id']; ?>'><i class="fas fa-edit"></i></button>

                                              <td class="p-2">
                                              <a href="s_table.php?delid=<?php echo $arr['id']; ?>"><button
                                                            type="button" class="btn btn-danger btn-xs delete_quotation"
                                                             style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a>
                        </tr>
                      
                      </tbody>
                    </table>
                  
                  
                  
                  
            </td>
                                                
                                               
                                                                                </tr>
                                                                                <?php $count++;   } ?>
                                             
                                   
                                    </table>
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
  <div class="modal fade" id="exampleModal">
      <div class="modal-dialog">
        <div class="modal-content ">
        <div class="modal-header">
             
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
     <form method="post" enctype="multipart/form-data">
           <div class="modal-body body1">

              
           </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="subm" >Submit</button>
            </div></form>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
      <!-- /.modal-dialog -->
    </div>
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
$(document).ready(function(){
$('.dnkd1').click(function(){
  let dnkd = $(this).data('id');

  $.ajax({
   url: 'servicemodal.php',
   type: 'post',
   data: {dnkd: dnkd},
   success: function(response1){ 
     $('.body1').html(response1);
     $('#exampleModal').modal('show'); 
   }
 });
});
});
</script>






</body>
</html>
