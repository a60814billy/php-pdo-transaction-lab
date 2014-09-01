<?php
session_start();
if(empty($_SESSION['user'])){
    header("Location:index.html");
    exit;
}
$db = new PDO("mysql:host=localhost;dbname=transaction_test;charset=utf8", "root", "123456");
?><!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <title>MySQL Transaction Test</title>
</head>
<body>
<?php
echo "Hi! " .$_SESSION['user'];
?>
<br />
<?php
$sql = "SELECT * FROM `order` WHERE user='".$_SESSION['user']."';";
$rs = $db->query($sql);
if($row = $rs->fetch(PDO::FETCH_ASSOC)){
    echo "Order num is : " . $row['order'];
}else{
    echo "<a href='order.php'>抽籤</a>";
}
?>
<br />
<a href="logout.php">登出</a>
</body>
</html>

