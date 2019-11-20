<?php
/* Some code on the top */
session_start();
include('./db.php');
$page_title = "Not remind";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php echo $page_title ?></title>
<link rel="stylesheet" href="/casino/css/style.css" />
</head>
<body>

<?php

if(isset($_SESSION['username'])):
?>

<p>Привет, <?= $_SESSION['username']; ?>!</p>
<p>Кабинет игрока.</p>
<p><a href="<?php echo stripos($_SERVER["REQUEST_URI"], 'casino') === false  ? 'casino' : '.' ?>/logout.php">Выйти</a></p>

<?php endif; ?>