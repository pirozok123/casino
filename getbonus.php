<?php

$page_title = "Not remind";
include("./header.php");

$success = false;

$randomcredits = rand(1, 100); /*  Бонусные баллы  */

$timeforcredits = time() + 3600;

$username = $_SESSION["username"];

$query = "SELECT `id`, `credits_time` FROM `users` WHERE `username`='$username'"; 

$result = mysqli_query($con,$query) or die(mysqli_error());

$row = mysqli_fetch_row($result);
$сredits_time = $row[1];
$user_id = $row[0];

if($сredits_time < time() || $сredits_time == 0){
	$query = "UPDATE `users` SET `credits_time`  = '".$timeforcredits."',  `credits` = `credits` + '".$randomcredits."' WHERE id ='".$user_id."'"; 
	$result = mysqli_query($con,$query) or die(mysqli_error());
	$success = true;
}

?>

<script type="text/javascript">	
<?php if(!$success) : ?>
alert('Бонус можно получать только 1 раз в час!');	
<?php else : ?>	
alert('Вы получили <?=$randomcredits?> бонусов!');	
<?php endif; ?>	

</script>

<?php include("./footer.php"); ?>

