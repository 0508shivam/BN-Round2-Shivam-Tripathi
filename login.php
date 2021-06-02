<?php  

	session_start();
	include("conn.php");

?>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <form id="register_form" method="post">
      <h1>Login</h1>
	  <div>
	 	<input type="text" name="username" placeholder="Username" id="username" >
	    <span></span>
	  </div>
	  <div>
	   <input type="password" name="password" placeholder="Password" id="password">
	  </div>
	  <div>
	 	<button type="submit" name="login" id="reg_btn">Login</button>
	  </div>
	  <hr>
	  <div class="containers signin">
		<p>Don't have an account? <a href="register.php">Sign Up</a>.</p>
		</div>
	</form>
</body>
</html>
<?php

if(isset($_POST['login']))
{
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$lpassword = mysqli_real_escape_string($db,$_POST['password']);

	$password = md5($lpassword);

	$get_user = "select * from login where username='$username' AND password='$password'";
	$run_user = mysqli_query($db,$get_user);
	$count = mysqli_num_rows($run_user);

	if($count == 1){
		$_SESSION['user'] = $username;
		echo "<script>alert('Logged in. Welcome Back')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		echo "<script>alert('Username or Password is Wrong!!!')</script>";
	}
}

?>