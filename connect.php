<?php
$connect=mysqli_connect("localhost","root","Roshini@0208","receipe");
$query="select * from enquiries";
$solution=mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg{
            margin-top:30px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <center>
        <div class="bg">
            <h2 style="font-size:30px;font-family:sans-serif;">Registered Details</h2>
        <link rel="stylesheet" href="bg.css">
   <table border=2 cellpadding="15">
    <tr>
        <th>id</th>
        <th>Phone</th>
        <th>location</th></div>
    </tr> </center>

    <?php
    while($a=mysqli_fetch_assoc($solution)){
        ?>
        <center>
        <tr>
            <td><?php echo $a['id'];?></td>
            <td><?php echo $a['phone'];?></td>
            <td><?php echo $a['location'];?></td>

            <td>
                <button><a href="edit.php?id=<?php echo $a['id'];?>">EDIT</a></button>
                <button><a href="delete.php?id=<?php echo $a['id'];?>">DELETE</a></button><td>
        </tr></center>
        <?php
    }
    ?>
</body>
</html>