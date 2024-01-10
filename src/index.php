<?php 
    const SERVER = 'mysql215.phy.lolipop.lan';
    const DBNAME = 'LAA1517457-final';
    const USER = 'LAA1517457';
    const PASS = 'Pass0308';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>サッカー選手情報管理</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>サッカー選手情報管理メニュー</h2>
    <form action=".php" method="post">
        <button type="submit" name="select.php">一覧</button>
        <button type="submit" name="insert.php">登録</button>
        <button type="submit" name="update.php">更新</button>
        <button type="submit" name="delete.php">削除</button>
    </form>
</body>
</html>
