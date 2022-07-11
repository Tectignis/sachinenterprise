<?php
include("../include/config.php");
if(isset($_POST['dnk'])){
  $query=mysqli_query($conn,"select callback.id,callback.name as nm,callback.phonenumber as phn,leads.email as em,leads.services as ser,leads.description as des from callback inner join leads on callback.id =leads.id  where callback.id='".$_POST['dnk']."'");
  $row=mysqli_fetch_array($query);
  echo '<div class="modal">
  
         
  
</div>
<form method="post" action="modalform22.php">

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
      <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>

    </div> 


</form>';
}




include("../include/config.php");

if(isset($_POST['save'])){

  $id=$_POST['id'];
  $email=$_POST['email'];
  $service=$_POST['service'];
  $description=$_POST['description'];
  $sql=mysqli_query($conn,"UPDATE `leads` SET `email`='$email' `service`='$service' `description`='description' where id='$id'" );
  header("location:sales.php");

}

if(isset($_POST['dnkidno1'])){
	$sql=mysqli_query($conn,"SELECT * FROM leads where id='".$_POST['dnkidno1']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
  </div>

  <form method="post" action="modalform.php">
<input type="hidden" value="'.$_POST['dnkidno1'].'" name="id">













?>