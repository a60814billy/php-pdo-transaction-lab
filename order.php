<?php
session_start();

$db = new PDO("mysql:host=localhost;dbname=transaction_test;charset=utf8", "root", "123456");

$db->beginTransaction();

$db->exec("LOCK TABLE `order`");

try{

    $rs = $db->query("SELECT * FROM `order` WHERE `user` IS NULL");
    $allRow = $rs->fetchAll();
    $count = $rs->rowCount();
    $rnd = rand(0,$count-1);
    $rndOrder = $allRow[$rnd]['order'];

    $sql = "UPDATE `order` SET `user`='". $_SESSION['user'] ."' WHERE `order`=".$rndOrder.";";
    $db->exec($sql);
    $db->commit();
} catch (Exception $e){

    $db->rollBack();
    $db->exec("UNLOCK TABLES");
}
$db->exec("UNLOCK TABLES");

header("Location:main.php");
