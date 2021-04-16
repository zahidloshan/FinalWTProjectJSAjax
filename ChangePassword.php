
<?php


include('ChangePasswordValidation.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<script src="JS/JSChangePassword.js"></script>
</head>
<body>

	<h1>Change PassWord</h1>

	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validateForm()" method="POST">
	    <br>
	    <p id="mytext"></p>
     <!--  Id -->
        <label for="sellerId">Enter Seller Email : </label>
		<input type="text" name="sid" id="sellerId" value="<?php echo $sellerId ?>">
		<p><?php echo $sellerIdErr; ?></p>
        <br>

        
	   <br>
       <!-- Current Password -->
        <label for="sPassword">Enter Your Current Password : </label>
		<input type="Password" name="spass" id="sPassword" value="<?php echo $sPassword ?>">
		<p><?php echo $sPasswordErr; ?></p>
        <br>
        
         <input type="submit" value="Continue" name= "button">
            
        </form>

        <br>

	    <br>

	    <button type="button"> <a href="Profile.php">Back!</a> </button>

</body>
</html>