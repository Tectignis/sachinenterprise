<?php
include("../include/config.php");
if(isset($_GET['gen'])){
  $id=mysqli_real_escape_string($conn,$_GET['gen']);
  $sql=mysqli_query($conn,"update leads set `is_sales`='1' where id='$id'");
  if($sql==1){
   header("location:sales.php");
  }


}
$sql2=mysqli_query($conn,"select callback.id as did,callback.name,callback.phonenumber,leads.email,leads.services,leads.description from callback inner join leads on callback.id =leads.id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Get a Call</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
              <li class="breadcrumb-item active">Get a Call</li>
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
                                                <th>Name</th>
                                                <th>Mobile No</th>
                                                <th>Email</th>
                                                 <th>Service</th>
                                                <th>Discription</th>
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                        
                       
                     $count=1;
                         while($arr=mysqli_fetch_array($sql2)){
                        ?>
                                            <tr>
                                                <td> <?php echo $count;?> </td>
                                                <td> <?php echo $arr['name'];?> </td>
                                                <td> <?php echo $arr['phonenumber'];?></td>
                                                <td> <?php echo $arr['email'];?></td>
                                                <td> <?php echo $arr['services'];?></td>
                                                <td> <?php echo $arr['description'];?></td>
                                                <td>
                                                  <a href="enquires.php?gen=<?php echo $arr['did'];?>">
                                                <button class="btn btn-primary" name="submit" >Convert To Sales</button>
                                             
                         </a>
                                              </td>
                                              
                          <td>
                            
                              
                            <a class="btn btn-default btn-xs usereditid" data-id="<?php echo $arr['did'] ?>" type="button" data-toggle="modal" data-target="#myModal" ><i class="fas fa-eye"></i></a> 
                                             
                            <a class="btn bg-orange btn-xs dnkd" data-id="2" data-toggle="modal" data-target="#dnk1"><i class="fa-solid fa-file"></i></a>
                                             
                           <a class="btn btn-info btn-xs dnkediti1" data-id="2"><i class="fas fa-edit"></i></a>
                          <a href="sales.php?delid=2"><button type="button" class="btn btn-danger btn-xs delete_quotation" onclick="ConfirmDelete()" style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a>
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

  <!-- Modal -->
  <div class="modal fade closemaual" id="dnkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Get a Call</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form method="post" action="modalform22.php">
      <div class="modal-body body1">
      </div>
    <div class="modal-footer">
    
      
    </div>
  </form>
  </div>
  </div>
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
          $('.usereditid').click(function(){
            let dnk = $(this).data('id');

            $.ajax({
            url: 'modalform22.php',
            type: 'post',
            data: {dnk: dnk},
            success: function(response1){ 
              $('.body1').html(response1);
              $('#dnkModal').modal('show'); 
            }
          });
          });


          });
          </script>
</body>
</html>
