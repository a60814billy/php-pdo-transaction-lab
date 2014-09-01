<?php


$num = $_POST['numOfOrder'];

$db = new PDO("mysql:host=localhost;dbname=transaction_test;charset=utf8", "root", "123456");
$db->exec("TRUNCATE `order`;");

for($i = 1 ; $i <= $num ; $i++){
    $sql = "INSERT INTO `order`(`order`) VALUES('$i');";
    $db->exec($sql);
}

header("Location:admin.php");