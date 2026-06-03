<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .form{
        display:inline-block;
        margin-top:20px;
        margin-left:80px;
        margin-right:20px;
        font-size:25px;
       }
        
       .text{
        display:flex;
        justify-content:space-evenly;
        margin-right:1180px;
        margin-top:10px;
        } 
        .sh{
        font-style:bold;
        font-size:28px;
        margin-top:5px;
        margin-left:10px;
        }
        .button{
        background-color:grey;
        padding:10px;
        border-radius:15px;
        font-size:15px;
        display:block;
        margin:20px auto;
        }
        .button:hover{
        background-color:white;
        transform:scale(1.05);
        }
        .item{
        display:block;
        background-color:grey;
        padding:10px;
        border-radius:15px;
        font-size:15px;
        margin-left:165px;

        }
        .item:hover{
        background-color:white;
        transform:scale(1.05);
        }
        .good{
        margin-left:100px;
        margin-top:120px;
        }
        .good2{
        font-size:30px;
        }
        .good3{
        font-style:italic;
        font-size:22px;
        margin-left:150px;
        margin-top:5px;
        }
       
    </style>
</head> 
<body>
    <div class="text">
        <div><img src="./spicehubimg.jpg" height="70px" width="80px"></div>
        <div class="sh">Spice Hub</div>
    </div>

    <div class="good">
        <div class="good2">IT'S ALL ABOUT</div>
        <div class="good3">Good Food</div>
    </div>
    <div class="form">
        <link rel="stylesheet" href="image.css"> 
    <form action="details.php" method="POST" >
        <label >Phone :</label>
        <input type="text" name="phone" required><br><br>
        <label >Location:</label>
        <input type="text" name="location"><br><br>
        <button class="button">Get Receipes </button></form>
    </div>
    <a href="connect.php">
    <button class="item">View Details</button></a>

</body>
</html>
