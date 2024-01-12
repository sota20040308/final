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
        <title>選手一覧</title>
    </head>
    <body>
        <h2>選手一覧</h2>
        <table>
            <tr><th>番号</th><th>選手名</th><th>チーム名</th></tr>
<?php
          $pdo=new PDO($connect,USER,PASS);
            foreach($pdo->query('select * from soccerplayer')as $row){
                echo '<tr>';
                echo '<td>',$row['id'],'</td>';
                echo '<td>',$row['name'],'</td>';
                echo '<td>',$row['team'],'</td>';
                echo '</tr>';
                echo "\n";
            }
 ?>
        </table>
    </body>

</html>