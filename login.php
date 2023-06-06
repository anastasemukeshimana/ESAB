<?php
include 'conn.php';
	session_start(); 	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
	/*.footer{
			margin-top: 300px;
			height: 200px;
			background-color: #123;
            color: #fff;
            text-align: center;
		} */
		h4{
			font-style: italic;
		}
		body{
			background-color: #bbb;
		}
		form{
			width: 40%;
			height: auto;
			background-color: #fff;
			margin-left: 30%;			
			border-radius: 10px;
			margin-top: 30px;
			border-collapse: collapse;
		}
		h2{
			margin-left: 36%;
			text-decoration: underline;
			color: steelblue;
		}
		input{
			display: block;
			width: 80%;
			padding: 10px;
			margin-left: 5%;
			border-collapse: collapse;
			border-radius: 7px;
		}
		label{
			margin-left: 5%;
			font-style: italic;
			font-size: 26px;
			margin-top: 10px;
			text-transform: capitalize;

		}
		button{
			border-collapse: collapse;
			border: none;
			width: 60%;
			height: 40px;
			border-radius: 7px;
			background-color: lightskyblue;
			color: #fff;
			font-size: 25px;
			margin-left: 20%;
			margin-top: 10px;
			margin-bottom: 20px;
		}
		
	</style>
</head>
<body>
	<h2>LOGIN HERE WITH YOUR ACCOUNT.</h2>
	<form method="post">
		<label>enter uname:</label>
		<input type="text" name="uname">
		<label>enter password:</label>
		<input type="password" name="pass">
		<button type="submit" name="login">Login</button>
	</form>
<?php 

	if (isset($_POST['login'])) {
		$name=$_POST['uname'];
		$pass=$_POST['pass'];
		$login=$conn->query("SELECT * FROM Users where u_Name='$name' and u_Password='$pass'");
		if ($fetch=mysqli_fetch_array($login)) {
			$_SESSION['name']=$fetch['u_Name'];
			?>
			<script>window.alert('Welcome <?php echo $_SESSION['name'] ?>')
			window.location.href='home.php'
		</script>
			<?php
		}
		else{
			echo "<script>alert('Incorrect User Name And Password')</script>";
		}
		}
	?>
</body>
</html>