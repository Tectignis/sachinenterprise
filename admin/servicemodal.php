<?php

include("../include/config.php");
if(isset($_POST['dnkd'])){
	$sql=mysqli_query($conn,"SELECT * FROM services where id='".$_POST['dnkd']."'");
	$arr=mysqli_fetch_array($sql);
	echo '
                <div class="row">   
                <div class="col-4">
                <b> Select Logo  :</b><br>
                </div>
                <input type="hidden" class="form-control" value="'.$arr['id'].'" name="id" >
                <div class="col-8">
                <p> <input type="text" class="form-control" value="'.$arr['logo'].'" name="logo" ></p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b>Select Image :</b><br>
                </div>
                <div class="col-8">
                <p> <input type="file" class="form-control" value="'.$arr['image'].'" name="image" ></p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Title :</b><br>
                </div>
                <div class="col-8">
                <p> <input type="text" name="title" value="'.$arr['title'].'" class="form-control"></p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Description :</b><br>
                </div>
                <div class="col-8">
                <p> 
                <textarea type="text" name="description" id="descriptionid" class="form-control">"'.$arr['description'].'"</textarea></p>
                </div>
                </div>

          ';
}
?>