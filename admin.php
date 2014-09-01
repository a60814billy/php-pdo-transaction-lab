<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <title>MySQL Transaction Test</title>
</head>
<body>
<h1>MySQL Transaction 測試 - 管理</h1>
<a href="index.html">首頁</a>

<fieldset>
    <legend>帳號管理</legend>
    *將會清空所有帳號
    <form action="addAccount.php" method="post">
        建立<input type="number" name="numOfAccount" value="30">個帳號<input type="submit" value="建立">
    </form>
</fieldset>

<fieldset>
    <legend>號碼管理</legend>
    *將會清空所有密碼
    <form action="addOrder.php" method="post">
        建立<input type="number" name="numOfOrder" value="30">個位置<input type="submit" value="建立">
    </form>
</fieldset>

<fieldset>
    <legend>帳號列表</legend>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>username</td>
            <td>password</td>
        </tr>
        <?php

        $db = new PDO("mysql:host=localhost;dbname=transaction_test;charset=utf8", "root", "123456");
        $rs = $db->query("SELECT * FROM user;");
        while ($row = $rs->fetch(PDO::FETCH_BOTH)) {
            echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['password']}</td></tr>";
        }

        ?>
    </table>
    <pre></pre>
</fieldset>

<fieldset>
    <legend>抽籤結果</legend>
    <table border="1">
        <tr>
            <td>Order</td>
            <td>username</td>
        </tr><?php

        $db = new PDO("mysql:host=localhost;dbname=transaction_test;charset=utf8", "root", "123456");
        $rs = $db->query("SELECT * FROM `order`;");
        while ($row = $rs->fetch(PDO::FETCH_BOTH)) {
            echo "<tr><td>{$row['order']}</td><td>{$row['user']}</td></tr>";
        }

        ?>
    </table>
    <pre></pre>
</fieldset>
</body>
</html>