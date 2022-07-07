<?php
include("include/config.php");

if(isset($_POST['submit'])){
  $amount=$_POST['amount'];
  $aid=$_POST['aid'];
  $sql=mysqli_query($conn,"UPDATE `service` SET `amount`='$amount' WHERE id='$aid'");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
              <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
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
                  <h3 class="card-title">DataTable with default features</h3>
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
                        <th>Status</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        
                        $sql=mysqli_query($conn,"select * from `service` where is_sales='1'");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                      <tr>
                        <td> <?php echo $arr['id'];?> </td>
                        <td> <?php echo $arr['name'];?> </td>
                        <td> <?php echo $arr['mobile_no'];?></td>
                        <td> <?php echo $arr['email'];?></td>
                        <td> <?php echo $arr['services'];?></td>
                        <td> <?php echo $arr['description'];?></td>
                      
                                               
                                                <td> <?php echo $arr['status'];?></td>
                                                
                        <td>
                         <button class="btn btn-sm btn-primary dnkediti1" data-id='<?php echo $arr['id']; ?>'><i class="fas fa-circle"></i></button>
                          <button class="btn btn-sm btn-primary dnkd" data-id='<?php echo $arr['id']; ?>'
                            data-toggle="modal" data-target="#dnk1"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-primary dnkediti" data-id='<?php echo $arr['id']; ?>'><i class="fas fa-eye"></i></button>
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
    <div class="modal fade" id="dnkModal2">
      <div class="modal-dialog">
        <div class="modal-content body2">

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="dnkModal1">
      <div class="modal-dialog">
        <div class="modal-content body1">

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="dnk1">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST">
              <div class="modal-body" id="exampleModal">
                <div class="form-group">
                  <label>Payemnt Amount</label>
                  <input type="text" class="form-control" name="amount">
                  <input type="hidden" name="aid" class="category">

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submit">Pay</button>
              </div>
            </form>
          </div>
       
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("include/footer.php"); ?>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
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
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
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
    $(document).ready(function() {
        $(".dnkd").on('click', function() {
            let categor = $(this).closest("tr").find("td:nth-child(1)").text().trim();
            $(".category").val(categor);
        });

    });
    </script>
<script>
$(document).ready(function(){
$('.dnkediti').click(function(){
  let dnkidno = $(this).data('id');

  $.ajax({
   url: 'modalform.php',
   type: 'post',
   data: {dnkidno: dnkidno},
   success: function(response1){ 
     $('.body1').html(response1);
     $('#dnkModal1').modal('show'); 
   }
 });
});
});
</script>
<script>
$(document).ready(function(){
$('.dnkediti1').click(function(){
  let dnkidno1 = $(this).data('id');

  $.ajax({
   url: 'modalform.php',
   type: 'post',
   data: {dnkidno1: dnkidno1},
   success: function(response1){ 
     $('.body2').html(response1);
     $('#dnkModal2').modal('show'); 
   }
 });
});
});
</script>

<script>
$(document).ready(function(){
$('.option').click(function(){
  let dnkidno1 = $(this).data('id');

  $.ajax({
   url: 'modalform.php',
   type: 'post',
   data: {dnkidno1: dnkidno1},
   success: function(response1){ 
     $('.body2').html(response1);
     $('#dnkModal2').modal('show'); 
   }
 });
});
});
</script>
</body>

</html>