<?php 
session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<script src="JS/JSAccount.js"></script>
	
</head>
<body>


	<h1>Account</h1>
	<button value="<?php echo $_SESSION["user"];?>" type="button" onclick="cureentbalance(this.value)">Current Balance</button>
	<p id="text"></p>
	
	<script>

		function cureentbalance(sellername) {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {

		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("text").innerHTML = this.responseText;
		      document.getElementById("text").style.color = "green";
		    }
			else
			{
				 document.getElementById("text").innerHTML = this.status;
			}
		  };
		  xhttp.open("POST", "CheckBalanceAjax.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("sellername="+sellername);
		}

		function updatebalance(sellername) {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {

		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("text1").innerHTML = this.responseText;
		      document.getElementById("text1").style.color = "green";
		    }
			else
			{
				 document.getElementById("text1").innerHTML = this.status;
			}
		  };
		  xhttp.open("POST", "UpdateBalance.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("sellername="+sellername);
		}

		function withdrawbalance() {
		  var WAmount = document.getElementById("WithrawAmount").value;
		  if(WAmount == "") {
				document.getElementById("text2").innerHTML = "Please Enter withdraw Amount";
				document.getElementById("text2").style.color = "red";
			}
			else
			{
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {

		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("text2").innerHTML = this.responseText;
		      document.getElementById("text2").style.color = "green";
		    }
			else
			{
				 document.getElementById("text2").innerHTML = this.status;
			}
		  };
		  xhttp.open("POST", "WithdrawValidation.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("WAmount="+WAmount);
		}
		}

		
</script> 

	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <button value="<?php echo $_SESSION["user"];?>" type="button" onclick="updatebalance(this.value)" >Update Balance</button>
	<p id="text1"></p>
	
	<input type="submit" value="WithdrawHistory" name= "button">
	
	</form>


        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validateForm()" method="POST" >
        <br>
		<input type="text" name="withdrawamount" id="WithrawAmount" placeholder="Enter Withdraw Amount">
		<button type="button" onclick="withdrawbalance()">Withdraw</button>
	    <p id="text2"></p>

		
		<p id="mytext"></p>
		<br>
		<button type="button"> <a href="Profile.php">Back!</a> </button>
		</form>

        

         <?php
            if($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['button'] == "WithdrawHistory") {
            	header('Location: WithdrawHistoryForm.php');
                
                }
        ?>

       

</body>
</html>