<?php
require "dataBaseConnection.php";

function get_Table_Tovar($result){
    echo '<table border="1"><thead>';
    echo '<tr><th>ID товару</th><th>Назва товару</th><th>Вага товару</th><th>Ціна товару</th><th>ID виробника</th></tr></thead><tbody>';

    foreach($result as $data){
        echo '<tr><td>' . $data['idProduct'] . '</td><td>' . $data['nameProduct'] . '</td>';
        echo '<td>' . $data['productWeight'] . '</td><td>' . $data['priceProduct'] . '</td>';
        echo '<td>' . $data['idManufacturer'] . '</td></tr>';
    }

    echo '</tbody></table>';
}



$pdo = dataBaseConnection();

if(isset($_POST["submitIdManufacrurer"])){
    $idManufacturer = $_POST['idManufacturer'];
    $sql = "SELECT * FROM tovar WHERE idManufacturer = :idManufacturer";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idManufacturer', $idManufacturer, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    get_Table_Tovar($result);
}

if(isset($_POST["submitPriceFromTo"])){
    $priceFrom = $_POST['priceFrom'];
    $priceTo = $_POST['priceTo'];

    $sql = "SELECT * FROM tovar WHERE priceProduct >= :priceFrom AND priceProduct <= :priceTo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':priceFrom', $priceFrom, PDO::PARAM_INT);
    $stmt->bindParam(':priceTo', $priceTo, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    get_Table_Tovar($result);
}

