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
		<link rel="stylesheet" href="style.css">
		<title></title>
	</head>
	<body>
		<div class="th0">番号</div>
		<div class="th1">選手名</div>
		<div class="th2">チーム名</div>
<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from soccerplayer') as $row) {
		echo '<form action="update-output.php" method="post">';
		//商品ID　作成３
		echo '<input type="hidden" name="id" value="', $row['id'], '">';
		echo '<div class="td0">', $row['id'], '</div>';
		echo '<div class="td1">';
		//商品名　作成４
		echo '<input type="text" name="name" value="', $row['name'],'">';
		echo '</div> ';
		echo '<div class="td1">';
		//価格　作成５
		echo '<input type="text" name="team" value="', $row['team'],'">';
		echo '</div> ';
		//更新ボタン　作成６
		echo '<div class="td2"><input type="submit" value="更新"></div>';
		echo '</form>';
		echo "\n";
	}
?>

    </body>
</html>