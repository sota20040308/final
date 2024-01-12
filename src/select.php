<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>選手一覧</title>
    </head>
    <body>
        <table>
            <tr><th>番号</th><th>選手名</th><th>チーム名</th></tr>
            <?php
            $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517457-final;charset=utf8',
            username:'LAA1517457',
            password:'Pass0308');
            foreach($pdo->query('select * soccerplayer from Shohin')as $row){
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