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
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->prepare('insert into soccerplayer(id, name, team) values (?, ?, ?)');
        if(!preg_match('/^\d+$/',$_POST['id'])){
            echo '番号を整数で入力してください。';
        }else if(empty($_POST['name'])){
            echo '選手名を入力してください。';
        }else if(empty($_POST['team'])){
            echo 'チーム名を入力してください。';
        }else if($sql->execute([ $_POST['id'], $_POST['name'], $_POST['team'] ]) ){
            echo '<font color="red">追加に成功しました。</font>';
        }else{
            echo '<font color="red">追加に失敗しました。</font>';
        }
    ?>
        <br><hr><br>
        <table>
            <tr><th>番号</th><th>選手名</th><th>チーム名</th></tr>
            <?php
                foreach($pdo->query('select * from soccerplayer') as $row){
                    echo '<tr>';
                    echo '<td>',$row['id'],'</td>';
                    echo '<td>',$row['name'],'</td>';
                    echo '<td>',$row['team'],'</td>';
                    echo '</tr>';
                    echo "\n";
                }
            ?>
        </table>
        <form action="index.php" method="post">
            <button type="submit">メニューへ戻る</button>
        </form>
        </body>
</html>