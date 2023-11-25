<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Практичні/src/css/styleIndex.css">
    <title>Site</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="../Практичні/view/addProduct.php">Add Product</a>
        </li>
        <li><a href="../Практичні/view/addManufacturer.php">Add Manufacturer</a>
        </li>
    </ul>
    <hr>
</nav>

<form name="parameters" action="../Практичні/src/outputDate.php" method="get">
    <div class="selectionParameters">
        <div class="idDiv">
            Номер виробника <input type="number" name="idProduct">
        </div>
        <div class="priceDiv">
            Ціна від <input  type="number" name="priceFrom" min="0" placeholder="0">
            Ціна до <input type="number" name="priceTo" min="0" placeholder="0">
        </div>

        <div class="weigthDiv">
            Вага від <input type="number" name="weigthFrom" >
            Вага до <input type="number" name="weigthTo">
        </div>
        <input type="button" name="btnParm" value="Select parameters">
    </div>
</form>

<?php
require "../Практичні/src/outputDate.php";
?>

</body>
</html>
