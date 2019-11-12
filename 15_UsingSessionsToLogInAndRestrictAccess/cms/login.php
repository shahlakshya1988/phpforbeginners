<?php 
session_start();
require_once "includes/header.php"; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["login"])){
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		if($username == "dave" && $password == "123"){
			// die("Login Correct");
			session_regenerate_id(true); // this gives new id to session, data is maintained
			$_SESSION["is_logged_in"] = true;
			header("Location: index.php");
			die();
 		}else{
			$errors[]="Login In-Correct";
		}
	}
}
?>
<h2>Login</h2>
<?php // var_dump($errors);?>
<form action="" method="POST">
	<?php 
	if(isset($errors) && !empty($errors)):
		foreach($errors as $error){
			?>
				<p><?=$error;?></p>
			<?php 
		}
	endif; 
	?>
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
	</div>
	<div>
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<button type="submit" name="login">Login</button>
	</div>
</form>
<?php 
require_once "includes/footer.php";
?>

