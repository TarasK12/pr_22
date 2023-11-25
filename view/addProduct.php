<?php
require "../src/functions.php";

if (isset($_GET['knopka'])){

    $fields = ['idProduct', 'nameProduct', 'vagaTovar', 'priceProduct', 'idManufacturer'];
    $allFieldsFilled = true;

    foreach ($fields as $field) {
        if (empty($_GET[$field])){
            $allFieldsFilled = false;
            break;
        }
    }

    if($allFieldsFilled){

        $idProduct = $_GET['idProduct'];
        $nameProduct = $_GET['nameProduct'];
        $vagaTovar = $_GET['vagaTovar'];
        $priceProduct = $_GET['priceProduct'];
        $idManufacturer = $_GET['idManufacturer'];



        $pdo = dataBaseConnection();


        $sql = "INSERT INTO tovar (idProduct, nameProduct, vagaTovar, priceProduct, idManufacturerobnyk) VALUES (:idProduct, :nameProduct, :vagaTovar, :priceProduct, :idManufacturer)";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute([
            'idProduct' => $idProduct,
            'nameProduct' => $nameProduct,
            'vagaTovar' => $vagaTovar,
            'priceProduct' => $priceProduct,
            'idManufacturer' => $idManufacturer

        ]);

        echo "Дані про товар доданно";
    } else{
        echo "Заповніть усі поля інформацією";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/css/styleProductPage.css">
</head>

<body>
    <div id="Table_Tovar">
        <nav>
            <ul>
                <li><a href="../index.php">Home</a>
                </li>
                <li><a href="../view/addManufacturer.php">Add Manufacturer</a>
                </li>
            </ul>
            <hr>
        </nav>
        <h1>Add Product</h1>
        <form name='myform' action="" method="get">
            <fieldset class="width-30 fix">
                <legend>Внесення даних про товар</legend>
                <br><br>Введіть дані: <br><br>
                Код виробу: <input name='idProduct' type='text'><br><br>
                Назва виробу: <input name='nameProduct' type='text'><br><br>
                Вага виробу: <input name='vagaTovar' type='text'><br><br>
                Ціна виробу: <input name='priceProduct' type='text'><br><br>
                Код виробника: <input name='idManufacturer' type='text'><br><br>
                <input name='knopka' type='submit' value='Ok'>
            </fieldset>
        </form>
    </div>
    <br><br>
</body>

</html>