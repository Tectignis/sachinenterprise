<?php

include("../include/config.php");
if(isset($_POST['dnkd'])){
	$sql=mysqli_query($conn,"SELECT * FROM testimonial where id='".$_POST['dnkd']."'");
	$arr=mysqli_fetch_array($sql);
	echo '
                <div class="row">   
                <div class="col-4">
                <b> name  :</b><br>
                </div>
                <input type="hidden" name="id" value="'.$arr['id'].'">
                <p> <input type="text" name="name" value="'.$arr['name'].'" class="form-control"></p>
                
                </div>

                <div class="row">   
                 <div class="col-4">
                <b>position :</b><br>
                </div>
                <div class="col-8">
                <p> <input type="text" name="position" value="'.$arr['position'].'" class="form-control"></p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b>Select Image :</b><br>
                </div>
                <div class="col-8">
               <p> <img src="logo/'. $arr['image'].'"   alt="sachinenterprise" width="50" height="50"></p>
                <p> <input type="file" class="form-control" value="'.$arr['image'].'" name="image" ></p>
                </div>
                </div>


                <div class="row">   
                <div class="col-4">
               <b> Rating:</b><br>
               </div>
               <div class="col-8">
               <p> <input type="text" name="rating" value="'.$arr['rating'].'" class="form-control"></p>
               </div>
               </div>

                <div class="row">   
                 <div class="col-4">
                <b> Message :</b><br>
                </div>
                <div class="col-8">
                <p> 
                <textarea type="text" name="message" id="messageid" class="form-control">"'.$arr['message'].'"</textarea></p>
                </div>
                </div>

          ';
}
?>