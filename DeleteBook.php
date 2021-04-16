
<!DOCTYPE html>
<html>
<head>
	<title>Delete Book </title>
	<script src="JS/JSDeleteBook.js"></script>
</head>
<body>
	<h1>Delete Book</h1>
	<script>
		function deletebook() {

		  var bid = document.getElementById("bId").value;
		  if(bid == "") {
				document.getElementById("textdelete").innerHTML = "Please Enter Book Id";
				document.getElementById("textdelete").style.color = "red";
			}
			else
			{
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {

		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("textdelete").innerHTML = this.responseText;
		      document.getElementById("textdelete").style.color = "green";
		    }
			else
			{
				 document.getElementById("textdelete").innerHTML = this.status;
			}
		  };
		  xhttp.open("POST", "DeleteBookAjax.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("bid="+bid);
		}
		}
	</script>

     <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validateForm()" method="POST">
	   <br>
	   <p id="mytext"></p>
     <!-- Book Id -->
        <label for="bId">Enter Book Id Which you want to delete : </label>
		<input type="text" name="bookid" id="bId">
        <br>
            
        </form>
        <br>
        <button  type="button" onclick="deletebook()">Delete</button>
	    <p id="textdelete"></p>
	    <button type="button"> <a href="DeleteBook.php">Refresh</a> </button>

        <br>

	    <br>

	    <button type="button"> <a href="Profile.php">Back!</a> </button>

	    <?php
	    session_start();
        include('DataBase.php');

	    $sellerid = $_SESSION['user']; 


	     $connection = new DataBase();
         $conobj=$connection->OpenCon();

         $userQuery=$connection->CheckBookList($conobj,$sellerid);

         if($userQuery->num_rows > 0) {
			 while($user = $userQuery->fetch_assoc()) { 
				 echo "<fieldset>


                <legend><b>Book:</b></legend>";

             echo '<img src="uploads/'.$user['bid'].'.png" alt='.$user['bid'].' width="300" height="130">'."<br>";  

        	 echo "Book Id : ".$user['bid']."<br>";
             echo "Book Title : ".$user['bookname']."<br>";
             echo "Book Author : ".$user['bauthor']."<br>";
             echo "Book Publisher : ".$user['bpublisher']."<br>";
             echo "Book Edition : ".$user['bedition']."<br>";
             echo "Book Price : ".$user['bprice']."<br>";
             echo "Book Quantity : ".$user['bquantity']."<br>";
             echo "</fieldset>";
			}
		}
       

    ?>

</body>
</html>






