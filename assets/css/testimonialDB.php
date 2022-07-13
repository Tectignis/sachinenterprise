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
    $loc="image/".$image;
    move_uploaded_file($dnk,$loc);
        }
    $rating=$_POST['rating'];
    $message=$_POST['message'];

    $sql="INSERT INTO `testimonial`(`name`, `position`, `image`, `rating`, `message`) VALUES('$name', '$position', '$image', '$rating', '$message')";

    if(mysqli_query($conn,$sql)){
        echo "<script> alert('New Records Added Has Been Succesfully !');window.location='testimonial1.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>
