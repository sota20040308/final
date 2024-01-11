<?php 
    const SERVER = 'mysql215.phy.lolipop.lan';
    const DBNAME = 'LAA1517457-final';
    const USER = 'LAA1517457';
    const PASS = 'Pass0308';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>選手を追加</h2>
<a href="CRUD-menu.php">メニューに戻る</a>
<hr>
<form action="" method="post">
    番号：<input type="text" name="number">
    <br>
    選手名：<input type="text" name="player">
    <br>
    チーム名: <input type="text" name="team">
    <button type="submit" name="action" value="send">登録</button>
    <br>
</form>
</body>
</html>
