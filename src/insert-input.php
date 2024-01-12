<?php 
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517457-final';
    const USER = 'LAA1517457';
    const PASS = 'Pass0308';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h2>選手登録</h2>
        <form action="insert-output.php"method="post">
            番号<input type="text" name="id"><br>
            選手名<input type="text" name="name"><br>
            チーム名<input type="text" name="team"><br>
            <button type="submit">登録</button>
        </form>
    </body>
</html>
