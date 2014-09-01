<?php


$num = $_POST['numOfAccount'];

$db = new PDO("mysql:host=localhost;dbname=transaction_test;charset=utf8", "root", "123456");
$db->exec("TRUNCATE user;");

for($i = 1 ; $i <= $num ; $i++){
    if($i<10){
        $account = "70420" . $i;
    }else{
        $account = "7042" . $i;
    }
    $sql = "INSERT INTO `user`(username,password) VALUES('$account','$account');";
    $db->exec($sql);
}

header("Location:admin.php");