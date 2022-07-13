<?php
    include('../../Sachin enterprise/assets/include/config.php');
    if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $position=$_POST['position'];
    $upload_icon=$_FILES['image']['name'];
    $extension=substr( $upload_icon,strlen( $upload_icon)-4,strlen( $upload_icon));
    $all_extension = array(".jpg","jpeg",".png","gif");
    if(!in_array($extension,$all_extension)){
      $msg="Invalid format. Only jpg / jpeg/ png /gif format allowed";
    } 
        else{
    $upload_icon=md5($upload_icon).$extension;
    $dnk=$_FILES['image']['tmp_name'];
    $loc="image/".$upload_icon;
    move_uploaded_file($dnk,$loc);
        }
    $rating=$_POST['rating'];
    $message=$_POST['message'];

    $sql="INSERT INTO `testimonial`(`name`, `position`, `image`, `rating`, `message`) VALUES('$name', '$position', '$upload_icon', '$rating', '$message')";

    if(mysqli_query($conn,$sql)){
        echo "<script> alert('New Records Added Has Been Succesfully !');window.location='testimonial1.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>
