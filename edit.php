<?php
$connect=mysqli_connect("localhost","root","Roshini@0208","receipe");
$id=$_GET['id'];
$query="select * from enquiries where id=$id";
echo $query;
$result=mysqli_query($connect,$query);
$a=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .edit{
            margin-top:90px;
            font-size:20px;
            border:5px groove lightgrey;
        }
    </style>
</head>
<body>
     <link rel="stylesheet" href="bg.css">
     <h2 style="font-size:30px;font-family:sans-serif;">Registered Details</h2>
    <div class="edit">
        <center>
    <form action="update.php" method="post"><br>
        <label >Id</label>
        <input type="int" name="id" value="<?php echo $a['id'];?>"><br><br>
        <label >Phone :</label>
        <input type="text" name="phone" value="<?php echo $a['phone'];?>"><br><br>
        <label >Location:</label>
        <input type="text" name="location" value="<?php echo $a['location'];?>"><br><br><br>
        <input type="Submit">
</center>
</div>
</body>
</html>

 