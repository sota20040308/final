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
    <table>
    <tr><th>番号</th><th>選手名</th><th>チーム名</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
	$sql=$pdo->prepare('select * from soccer where id =?');
	$sql->execute([$_POST['id']]);
	foreach ($sql as $row) {
        echo '<tr>';
		echo '<form action="index.php" method="post">';
        echo '<td> ';
		echo '<input type="text" name="id" value="', $row['id'], '">';
		echo '</td> ';
		echo '<td>';
		echo '<input type="text" name="name" value="', $row['name'], '">';
		echo '</td> ';
		echo '<td>';
		echo ' <input type="text" name="team" value="', $row['team'], '">';
		echo '</td> ';
		echo '<td><input type="submit" value="更新"></td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
?>
</table>
    </body>
</html>
