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
    <form action="CRUD-branch.php" method="post">
        <button type="submit" name="select">一覧</button>
        <button type="submit" name="insert">登録</button>
        <button type="submit" name="update">更新</button>
        <button type="submit" name="delete">削除</button>
    </form>
</body>
</html>
