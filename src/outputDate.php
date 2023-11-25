<?php

require "functions.php";

/*if (isset($_GET['btnParm'])){
}*/

$pdo = dataBaseConnection();

$sql = "SELECT * FROM tovar";
$result = $pdo->query($sql);

if ($result->rowCount() > 0) {
    echo "<table border='1'>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Price</th>
                    <th>Manufacturer</th>
                </tr>";

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                    <td>" . $row["idProduct"] . "</td>
                    <td>" . $row["nameProduct"] . "</td>
                    <td>" . $row["productWeight"] . "</td>
                    <td>" . $row["priceProduct"] . "</td>
                    <td>" . $row["idManufacturer"] . "</td>
                  </tr>";
    }

    echo "</table>";
} else {
    echo "0 результатів";
}
