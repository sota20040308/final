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
<?php
    $pdo=new PDO($connect, USER, PASS);
    // SQL発行準備 prepareメソッド　作成２
    $sql=$pdo->prepare('update soccerplayer set name=?, team=? where id=?');
    if (empty($_POST['name'])) {
        echo '選手名を入力してください。';
    } else
    if (empty($_POST['team'])) {
        echo 'チーム名を入力してください。';
    } else
    //SQLを発行 excuteメソッド　作成３
    if($sql->execute([htmlspecialchars($_POST['name']), $_POST['team'], $_POST['id']])){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }
    
?>
        <hr>
        <table>
        <tr><th>番号</th><th>選手名</th><th>チーム名</th></tr>

<?php
foreach ($pdo->query('select * from soccerplayer') as $row) {
    echo '<tr>';
    echo '<td>', $row['id'], '</td>';
    echo '<td>', $row['name'], '</td>';
    echo '<td>', $row['team'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
        </table>
        <button onclick="location.href='index.php'">メニューへ戻る</button>
    </body>
</html>
