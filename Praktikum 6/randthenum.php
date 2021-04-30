<?php
session_start();
$_SESSION['rand'] = rand(0, 100);
header("Location: randnumgame.php");
?>