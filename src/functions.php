<?php
function dataBaseConnection()
{
    $dbname = "firma100";
    $host = "127.0.0.1";
    $username = "root";
    $password = "";

    try {
        return $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
    } catch (PDOException $exception){
        die("Error: " . $exception->getMessage());
    }
}
