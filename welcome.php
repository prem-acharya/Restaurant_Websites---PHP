<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="food.css">
</head>

<body>

    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
                <img src="./image/logo.jpg">
            </div>

            <li><a href="about.php">About</a></li>
            <li><a href="food.php">Order</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>


            <li>
                <h1><?php echo $_SESSION['username'];?></h1>
            </li>

        </ul>

        <div class="rightNav">
            <label for="food">search</label>
            <input list="flavors" id="food" name="food" />

            <datalist id="flavors">
                <option value="Pizza">
                <option value="Pasta">
                <option value="Burger">
                <option value="Momos">
                <option value="Sandwich">
            </datalist>
        </div>
    </nav>

    <div class="firstHalf">
        <h1 class="center" id="web">
            Food Gallery
        </h1>
        <br>
    </div>

    <table id="table">

        <tr>
            <td>
                <div class="div1">
                    <img src="./image/c1.jpg" style="width: 45%;" />
                    <p>Street food</p>
                    <a class="a" href="Streetfood.php"><button class="btn btn1" href="Streetfood.php">Menu</button></a>
                    <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                    <img src="./image/c2.jpg" style="width: 50%;" />
                    <p>Chinese food </p>
                    <a class="a" href="Chinesefood.php"><button class="btn btn2">Menu</button></a>
                    <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                    <img src="./image/c3.jpg" style="width: 40%;" />
                    <p>South indian food</p>
                    <a class="a" href="Southindianfood.php"><button class="btn btn3">Menu</button></a>
                    <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                    <img src="./image/c4.jpg" style="width: 50%;" />
                    <p>Punjabi food</p>
                    <a class="a" href="Punjabifood.php"><button class="btn btn4">Menu</button></a>
                    <br /><br />
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">&nbsp;</td>
        </tr>
    </table>

</body>

</html>