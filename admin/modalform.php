<?php
include("../include/config.php");

if(isset($_POST['dnkidno'])){
	$sql=mysqli_query($conn,"SELECT * FROM leads where id='".$_POST['dnkidno']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
             
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form method="post" action="modalform.php">
            <div class="modal-body body1">
                <div class="row">   
                <div class="col-4">
                <b> Name :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['name'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Mobile No :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['mobile_no'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Email :</b><br>
                </div>
                <div class="col-8">
                <p>'.$arr['email'].'</p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Service :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['services'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Description :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['description'].' </p>
                </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div></form>';
}



include("../include/config.php");

if(isset($_POST['save'])){

  $id=$_POST['id'];
  $status=$_POST['status'];
  $sql=mysqli_query($conn,"UPDATE `leads` SET `status`='$status' where id='$id'" );
  header("location:sales.php");
}



if(isset($_POST['dnkidno1'])){
	$sql=mysqli_query($conn,"SELECT * FROM leads where id='".$_POST['dnkidno1']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
             <h3>'.$arr['services'].'</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form method="post" action="modalform.php">
<input type="hidden" value="'.$_POST['dnkidno1'].'" name="id">    
        <div class="modal-body body1">
                
           
        <div class="modal-body body1">
        <div class="row">   
        <div class="col-4">
        <b> Name :</b><br>
        </div>
        <div class="col-8">
        <p> '.$arr['name'].' </p>
        </div>
        </div>

        <div class="row">   
         <div class="col-4">
        <b> Mobile No :</b><br>
        </div>
        <div class="col-8">
        <p> '.$arr['mobile_no'].' </p>
        </div>
        </div>

        <div class="row">   
         <div class="col-4">
        <b> Email :</b><br>
        </div>
        <div class="col-8">
        <p>'.$arr['email'].'</p>
        </div>
        </div>

        <div class="row">   
         <div class="col-4">
        <b> Service :</b><br>
        </div>
        <div class="col-8">
        <p> '.$arr['services'].' </p>
        </div>
        </div>

        <div class="row">   
         <div class="col-4">
        <b> Description :</b><br>
        </div>
        <div class="col-8">
        <p> '.$arr['description'].' </p>
        </div>
        </div>
        
        <div class="row">   
        <div class="col-4">
       
        <label>Status :</label>
        </div>
        <div class="col-8">
        <p> <select required class="form-control" name="status" id="servicesid">
                <option value="" disabled selected hidden>select</option>
                <option value="Open">Open</option>
                <option value="In Process">In Process</option>
                <option value="Hold On">On Hold</option>
                <option value="Closed">Closed</option>
                
               
            

              </select> </p>
     
        </div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" name="save" >Save</button>
    </div>      
                       
            </form>';
}

?>