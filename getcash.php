<?php

$page_title = "Not remind";
include("./header.php");

$success = false;

$randomsum = rand(1, 10); /*  Евро, долларов или чешских крон - неизвестно :) */

$timeforcash = time() + 86400;

$username = $_SESSION["username"];

$query = "SELECT `id`, `balance_time` FROM `users` WHERE `username`='$username'"; 

$result = mysqli_query($con,$query) or die(mysqli_error());

$row = mysqli_fetch_row($result);
$balance_time = $row[1];
$user_id = $row[0];

if($balance_time < time() || $balance_time == 0){
	$query = "UPDATE `users` SET `balance_time`  = '".$timeforcash."',  `balance` = `balance` + '".$randomsum."' WHERE id ='".$user_id."'"; 
	$result = mysqli_query($con,$query) or die(mysqli_error());
	$success = true;
}

?>

<script type="text/javascript">	
<?php if(!$success) : ?>
alert('Денежный приз можно получать только 1 раз в сутки!');	
<?php else : ?>	
alert('Ваш баланс был пополнен на <?=$randomsum?> евро! Возвращайтесь через 24 часа и получайте бонус снова');	
<?php endif; ?>	

</script>

<?php include("./footer.php"); ?>

