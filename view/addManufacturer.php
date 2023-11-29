<?php
require "../src/dataBaseConnection.php";

if (isset($_GET['btn'])){
    $fields = ['idManufacturer', 'nameManufacturer', 'adressManufacturer'];
    $allFieldsFilled = true;

    foreach ($fields as $field) {
        if(empty($_GET[$field])){
            $allFieldsFilled = false;
            break;
        }
    }

    if($allFieldsFilled){
        $idManufacturer = $_GET['idManufacturer'];
        $nameManufacturer = $_GET['nameManufacturer'];
        $adressManufacturer = $_GET['adressManufacturer'];

        $pdo = dataBaseConnection();

        $sql = 'INSERT INTO vyrobnyk (idManufacturer, nameManufacturer, adressManufacturer) VALUES (:idManufacturer, :nameManufacturer, :adressManufacturer)';
        $stmt = $pdo ->prepare($sql);
        $stmt ->execute([
            'idManufacturer' => $idManufacturer,
            'nameManufacturer' => $nameManufacturer,
            'adressManufacturer' => $adressManufacturer
        ]);

        echo "Дані про виробника додано";
    } else{
        echo "Заповніть усі поля інформацією";
    }
}


?>

<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleMaufacturePage.css">
    <title>Site</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="../view/addProduct.php">Add Product</a>
        </li>
        <li><a href="../index.php">Home</a>
        </li>
    </ul>
    <hr>
</nav>

<h1>Add Manufacturer</h1>

<form name='myform' action="" method="get">
    <fieldset class="width-30 fix">
        <legend>Внесення даних про виробника</legend>
        <br><br>Введіть дані: <br><br>
        Код виробника: <input name='idManufacturer' type='text'><br><br>
        Назва вироника: <input name='nameManufacturer' type='text'><br><br>
        Адреса виробника: <input name='adressManufacturer' type='text'><br><br>
        <input name='btn' type='submit' value='Ok'>
    </fieldset>
</form>
</div>
</body>
</html>
