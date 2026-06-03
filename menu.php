<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .spl{
            font-size:35px;
            margin-top:20px;
            margin-left:20px;
        }
        .meat{
            display:flex;
            justify-content:space-evenly;
            margin-top:30px;
        }
        .item{
            display:flex;
            flex-direction:column;
            align-items:center;
            text-align:center;
            text-decoration:none;
            color:black;
        }
        .item img{
            border:5px outset lightgrey;
            border-radius:30px;

        }
        .item:hover img{
            transform:scale(1.05);
        }
        .food{
            margin-top:15px;
            font-size:24px;
            font-weight:bold;
        }



        .fish{
            font-size:35px;
            margin-top:20px;
            margin-left:20px;
        }
        .sea{
            display:flex;
            justify-content:space-evenly;
            margin-top:30px;
        }
        .item1{
            display:flex;
            flex-direction:column;
            align-items:center;
            text-align:center;
            text-decoration:none;
            color:black;
        }
        .item1 img{
            border:5px outset lightgrey;
            border-radius:30px;

        }
        .item1:hover img{
            transform:scale(1.05);
        }
        .fry{
            margin-top:15px;
            font-size:24px;
            font-weight:bold;
        }



        .meals{
            font-size:35px;
            margin-top:20px;
            margin-left:20px;
        }
        .meal{
            display:flex;
            justify-content:space-evenly;
            margin-top:30px;
        }
        .item2{
            display:flex;
            flex-direction:column;
            align-items:center;
            text-align:center;
            text-decoration:none;
            color:black;
        }
        .item2 img{
            border:5px outset lightgrey;
            border-radius:30px;

        }
        .item2:hover img{
            transform:scale(1.05);
        }
        .mi{
            margin-top:15px;
            font-size:24px;
            font-weight:bold;
        }



        .fast{
            font-size:35px;
            margin-top:20px;
            margin-left:20px;
        }
        .fastfood{
            display:flex;
            justify-content:space-evenly;
            margin-top:30px;
        }
        .item3{
            display:flex;
            flex-direction:column;
            align-items:center;
            text-align:center;
            text-decoration:none;
            color:black;
        }
        .item3 img{
            border:5px outset lightgrey;
            border-radius:30px;

        }
        .item3:hover img{
            transform:scale(1.05);
        }
        .burger{
            margin-top:15px;
            font-size:24px;
            font-weight:bold;
        }




        .street{
            font-size:35px;
            margin-top:20px;
            margin-left:20px;
        }
        .shawarma{
            display:flex;
            justify-content:space-evenly;
            margin-top:30px;
        }
        .item4{
            display:flex;
            flex-direction:column;
            align-items:center;
            text-align:center;
            text-decoration:none;
            color:black;
        }
        .item4 img{
            border:5px outset lightgrey;
            border-radius:30px;

        }
        .item4:hover img{
            transform:scale(1.05);
        }
        .rolls{
            margin-top:15px;
            font-size:24px;
            font-weight:bold;
        }
        



        .chinese{
            font-size:35px;
            margin-top:20px;
            margin-left:20px;
        }
        .noodles{
            display:flex;
            justify-content:space-evenly;
            margin-top:30px;
        }
        .item5{
            display:flex;
            flex-direction:column;
            align-items:center;
            text-align:center;
            text-decoration:none;
            color:black;
        }
        .item5 img{
            border:5px outset lightgrey;
            border-radius:30px;

        }
        .item5:hover img{
            transform:scale(1.05);
        }
        .rice{
            margin-top:15px;
            font-size:24px;
            font-weight:bold;
        }

    </style>
</head>
<body>
    <link rel="stylesheet" href="color.css"> 

    <div class="spl">🍖Meat Specials</div>
    <div class="meat">
    <a href="briyani.php" class="item">
        <img src="./briyani.jpg" alt="" height="300px" width="300px">
        <div class="food">Briyani</div>
    </a>

    <a href="mutton.php" class="item">
        <img src="./mutton.jpg" alt="" height="300px" width="300px">
        <div class="food">Mutton</div>
    </a>

    <a href="grill.php" class="item">
        <img src="./grill.jpg" alt="" height="300px" width="300px" >
         <div class="food">Hot Grill</div>
    </a>
</div>


    <div class="fish">🐟Fish & Seafood</div>
    <div class="sea">
    <a href="fishfry.php" class="item1">
        <img src="./fishfry.jpg" alt="" height="300px" width="300px">
        <div class="fry">Fish Fry</div>
    </a>

    <a href="prawn.php" class="item1">
        <img src="./prawn.jpg" alt="" height="300px" width="300px">
        <div class="fry">Prawn Masala</div>
    </a>

    <a href="Crab.php" class="item1">
        <img src="./grab.jpg" alt="" height="300px" width="300px" >
         <div class="fry">Crab Curry</div>
    </a>
    </div>


    <div class="meals">🍛Meals</div>
    <div class="meal">
    <a href="breakfast.php" class="item2">
        <img src="./breakfastmeals.jpg" alt="" height="300px" width="300px">
        <div class="mi">Breakfast Meals</div>
    </a>

    <a href="minimeals.php" class="item2">
        <img src="./varietyrice.jpg" alt="" height="300px" width="300px">
        <div class="mi">Variety Rice Meals</div>
    </a>

    <a href="onepot.php" class="item2">
        <img src="./healthymeals.jpg" alt="" height="300px" width="300px" >
         <div class="mi">Healthy Meals</div>
    </a>
    </div>



    <div class="fast">🍔Fast Food</div>
    <div class="fastfood">
    <a href="burger.php" class="item3">
        <img src="./burger.jpg" alt="" height="300px" width="300px">
        <div class="burger">Burger</div>
    </a>

    <a href="pizza.php" class="item3">
        <img src="./cheesepizza.jpg" alt="" height="300px" width="300px">
        <div class="burger">Pizza</div>
    </a>

    <a href="hotdog.php" class="item3">
        <img src="./hotdog.jpg" alt="" height="300px" width="300px" >
         <div class="burger">Hot Dog</div>
    </a>
    </div>



    <div class="street">🥪Street Food</div>
    <div class="shawarma">
    <a href="sandwich.php" class="item4">
        <img src="./sandwitchimg1.jpg" alt="" height="300px" width="300px">
        <div class="rolls">Sandwich</div>
    </a>

    <a href="shawarma.php" class="item4">
        <img src="./shawarma.jpg" alt="" height="300px" width="300px">
        <div class="rolls">Shawarma</div>
    </a>

    <a href="momos.php" class="item4">
        <img src="./momos.jpg" alt="" height="300px" width="300px" >
         <div class="rolls">Momos</div>
    </a>
    </div>



    <div class="chinese">🍜chinese Foods</div>
    <div class="noodles">
    <a href="noodles.php" class="item5">
        <img src="./noodles.jpg" alt="" height="300px" width="300px">
        <div class="rice">Noodles</div>
    </a>

    <a href="friedrice.php" class="item5">
        <img src="./fried rice.jpg" alt="" height="300px" width="300px">
        <div class="rice">Fried Rice</div>
    </a>

    <a href="springrolls.php" class="item5">
        <img src="./springrolls.jpg" alt="" height="300px" width="300px" >
         <div class="rice">Spring Rolls</div>
    </a>
    </div>

</body>
</html>