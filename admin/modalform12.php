<?php
include("../include/config.php");

if(isset($_POST['dnkidno'])){
    $query=mysqli_query($conn,"select callback.id,callback.name as nm,callback.phonenumber as phn,leads.email as em,leads.services as ser,leads.description as des from callback inner join leads on callback.id =leads.id  where callback.id='".$_POST['dnkidno']."'");
    $row=mysqli_fetch_array($query);
    
    echo '<div class="header">
    
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  </div>
  <form method="post" action="modalform22.php">
  <div class="modal-body body1">
      <div class="row">   
      <div class="col-4">
      <b> Name :</b><br>
      </div>
      <div class="col-8">
      <p> '.$row['nm'].'</p>
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
      <p>'.$row['email'].'</p>
      </div>
      </div>
  
      <div class="row">   
       <div class="col-4">
      <b> Service :</b><br>
      </div>
      <div class="col-8">
      <p> '.$row['service'].' </p>
      </div>
      </div>
  
      <div class="row">   
       <div class="col-4">
      <b> Description :</b><br>
      </div>
      <div class="col-8">
      <p> '.$row['description'].' </p>
      </div>
      </div>
  </div>
  
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save</button>
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

if(isset($_POST['compsubmit'])){
$id=$_POST['leadsid'];
$email=$_POST['email'];
$services=$_POST['service'];
$description=$_POST['description'];
$sql=mysqli_query($conn,"UPDATE `enquiry` SET `email`='$email',`service`='$services',`description`='$description' WHERE id='$id'");
}
?>