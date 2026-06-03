 <?php
 $phone=$_POST['phone'];
 $location=$_POST['location'];

 $connect=mysqli_connect("localhost","root","Roshini@0208","receipe");
 $query="insert into enquiries(phone,location) values('$phone','$location')";
 $result=mysqli_query($connect,$query);
 
if($query){
    header("location:menu.php");
}
 echo $phone_number;
 echo $location;
 ?>
