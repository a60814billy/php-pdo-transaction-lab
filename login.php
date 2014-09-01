<?php

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new PDO("mysql:host=localhost;dbname=transaction_test;charset=utf8", "root", "123456");
    $sql  = "SELECT count(*) FROM user WHERE username='$username' AND password='$password'";
    $rs = $db->query($sql);

    $count = $rs->fetch()[0];
    if($count <1){
        header("Location:index.html");
        exit;
    }

    $_SESSION['user'] = $username;

    header("Location:main.php");