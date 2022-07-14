<?php
  include("../include/config.php");
    if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $position=$_POST['position'];
    $image=$_FILES['image']['name'];
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
    $rating=$_POST['rating'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn,"INSERT INTO `testimonial`(`name`, `position`, `image`, `rating`, `message`) VALUES('$name','$position','$image','$rating','$message')");

    if($sql==1){
        header("location:testimonial1.php");
        }
        else
        echo 'connection failed';
   
}
?>

