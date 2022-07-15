<?php
include("../include/config.php");

if(isset($_POST['dnkidno'])){
    $query=mysqli_query($conn,"select callback.id,callback.name as nm,callback.phonenumber as phn,enquiry.email as em,enquiry.service as ser,enquiry.description as des from callback inner join enquiry on callback.id =enquiry.id  where callback.id='".$_POST['dnkidno']."'");
    $row=mysqli_fetch_array($query);
    
    echo '<div class="modal-header">
     
   
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  </div>
  <form method="post" action="getacall.php">
  <div class="modal-body body1">
      <div class="row">   
      <div class="col-4">
      <b> Name :</b><br>
      </div>
      <div class="col-8">
       <p> '.$row['nm'].' </p>
      </div>
      </div>
    
      <div class="row">   
       <div class="col-4">
      <b> Mobile No :</b><br>
      </div>
      <div class="col-8">
      <p> '.$row['phn'].' </p>
      </div>
      </div>
  
      <div class="row">   
       <div class="col-4">
      <b> Email :</b><br>
      </div>
      <div class="col-8">
      <p>'.$row['em'].'</p>
      </div>
      </div>  
  
      <div class="row">   
       <div class="col-4">
      <b> Service :</b><br>
      </div>
      <div class="col-8">
      <p> '.$row['ser'].' </p>
      </div>
      </div>
  
      <div class="row">   
       <div class="col-4">
      <b> Description :</b><br>
      </div>
      <div class="col-8">
      <p> '.$row['des'].' </p>
      </div>
      </div>
  </div>
  
  <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" name="close">Close</button>
              <button type="submit" class="btn btn-primary" name="submit" >Save</button>
            </div>
  </form>';
  }







if(isset($_POST['dnkidno1'])){
	$sql=mysqli_query($conn,"SELECT * FROM enquiry where id='".$_POST['dnkidno1']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
    <h4 class="modal-title"></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> 
   
            </div>

            <form method="post">
            
<div class="modal-body ">
			<div class="container">
    <div class="row">   
    
         <div class="col-4">
        <b> Email :</b><br>
        </div>
        <div class="col-8">
          

        <input style="margin-bottom:10px; type="text" class="for-control" id="email" value="'.$arr['email'].'" name="email">
        </div>
        </div>

        <div class="row">   
         <div class="col-4">
        <b> Service :</b><br>
        </div>
        <div class="col-8">
        <input type="text" style="margin-bottom:10px;class="for-control" id="service" value="'.$arr['service'].'" name="service">
        </div>
        </div>

        <div class="row">   
         <div class="col-4">
        <b> Description </b><br>
        </div>
        <div class="col-8">
        <input type="text" style="margin-bottom:10px; class="for-control" id="description" value="'.$arr['description'].'" name="description">
        </div>
        </div>
        
        
    </div>
    </div>
    <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" name="close">Close</button>
              <button type="submit" class="btn btn-primary" name="compsubmit" >Save</button>
            </div>
                       
            </form>';
}

if(isset($_POST['save'])){
$id=$_POST['id'];
$email=$_POST['email'];
$service=$_POST['service'];
$description=$_POST['description'];
$sql=mysqli_query($conn,"UPDATE `enquiry` SET `email`='$email',`service`='$service',`description`='$description' WHERE id='$id'");
}
?>