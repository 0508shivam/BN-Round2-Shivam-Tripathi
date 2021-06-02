<?php include('process.php'); ?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <form id="register_form" method="post">
      <h1>Register</h1>
      <div id="error_msg"></div>
	  <div>
	 	<input type="text" name="username" placeholder="Username" id="username" >
	    <span></span>
	  </div>
	  <div>
	    <input type="email" name="email" placeholder="Email" id="email">
		<span></span>
	  </div>
	  <div>
	   <input type="password" name="password" placeholder="Password" id="password">
	  </div>
	  <div>
	 	<button type="submit" name="register" id="reg_btn">Register</button>
	  </div>
	  <hr>
	  <div class="containers signin">
		<p>Already have an account? <a href="login.php">Sign in</a>.</p>
		</div>
	</form>
</body>
</html>
<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>