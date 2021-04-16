<?php


include('LogValidation.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <script src="JS/JSLogin.js"></script>
</head>
<body>
    Already have an account?
	<h1>Login</h1>
    <p id="mytext"></p>
    <form name="LoginForm" action="" onsubmit="return validateForm()" method="POST"> 
    <label for="userName">User Name : </label>
	<input type="text" id="userName" name="username" placeholder="Enter your username" >
	<br>
	<label for="Password">Password : </label>
    <input type="password" id="Password" name="password" placeholder="Enter your password" >
    <br>
    <input name="submit" type="submit" value="LOGIN">
    <h2>Sign Up</h2>

    <button type="button"> <a href="Registration.php">Sign Up!</a> </button>

    </form>

</body>
</html>