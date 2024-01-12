<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>課題6-3-2</title>
    </head>
    <body>
        <table>
            <tr><th>番号</th><th>選手名</th><th>チーム名</th></tr>
            <?php
            $pdo=new PDO('mysql:host=mysql212.phy.lolipop.lan;dbname=LAA1517480-sample;charset=utf8',
            username:'LAA1517480',
            password:'Pass0101');
            foreach($pdo->query('select * from Shohin')as $row){
                echo '<tr>';
                echo '<td>',$row['shohin_id'],'</td>';
                echo '<td>',$row['shohin_mei'],'</td>';
                echo '<td>',$row['shohin_bunrui'],'</td>';
                echo '<td>',$row['hanbai_tanka'],'</td>';
                echo '<td>',$row['shiire_tanka'],'</td>';
                echo '<td>',$row['torokubi'],'</td>';
                echo '</tr>';
                echo "\n";
            }
            ?>
        </table>
    </body>

</html>