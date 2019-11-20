<?php

include("./header.php");

if(isset($_SESSION['username'])):

?>

<div class="form">
<p><a href="./getcash.php">Получить денежный приз (1 раз в день)</a></p>
<p><a href="./getbonus.php">Получить бонус (1 раз в час)</a></p>
<p><a href="./getsubject.php">Получить предмет (выбрать из списка)</a></p>
<p><a href="./casout.php">Вывести на банковский счёт (functions.php)</a></p>

</div>

<?php else : ?>

<?php

	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='./'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='casino/registration.php'>Register Here</a></p>

</div>

<?php

}

endif; 

?>

<?php include("./footer.php"); ?>

</html>
