<?php
$connect=mysqli_connect("localhost","root","Roshini@0208","receipe");
$id=$_GET['id'];
$query="delete from enquiries where id=$id";
$solution=mysqli_query($connect,$query);

if($solution){
    header("location:connect.php");
}
?>
 