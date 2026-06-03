<?php
$connect=mysqli_connect("localhost","root","Roshini@0208","receipe");
$id=$_POST['id'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$query="UPDATE enquiries SET phone='$phone',location='$location' where id='$id'";
$a=mysqli_query($connect,$query);

if($a){
    header("location:connect.php");
}
?>
 