<?php

$page_title = "Not remind";
include("./header.php");
include("./functions.php");

?>

<div class="form">
<form method="post" action="">	
<select name="spin">
 <option value="1">10 бесплатных спинов</option>
 <option value="2">25 бесплатных спинов</option>
 <option value="3">50 бесплатных спинов</option>	
 <option value="4">0 бесплатных спинов</option>	
</select>	
 <input type="submit" value="Получить" style="display: block;">
</form>
</div>

<?php if(isset($_POST["spin"])):

	$success = false;

    $username = $_SESSION["username"];

	$query = "SELECT `id` FROM `users` WHERE `username`='$username'"; 

	$result = mysqli_query($con,$query) or die(mysqli_error());

	$row = mysqli_fetch_row($result);
	$user_id = $row[0];

    $subjectname = spinName((int)$_POST["spin"]);	

	$query = "UPDATE `users` SET `subjects`  = '".time()."',  `subjects` = '".$subjectname."' WHERE id ='".$user_id."'"; 
	$result = mysqli_query($con,$query) or die(mysqli_error());
       //sendBonusToMail($randomcredits);
	$success = true;

	?>

<script type="text/javascript">	
<?php if(!$success) : ?>
alert('Непредвиденная ошибка!');	
<?php else : ?>	
alert('Вы получили <?=$subjectname?>!');	
<?php endif; ?>	
</script>

<?php endif; include("./footer.php"); ?>
