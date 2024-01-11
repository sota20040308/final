<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
unset($_SESSION['soccerplayer'][$_GET['id']]);
echo '選手を削除しました。';
echo '<hr>';
require 'index.php';
?>
<?php require 'footer.php'; ?>