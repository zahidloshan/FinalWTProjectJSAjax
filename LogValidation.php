<?php

include('DataBase.php');


if(isset($_POST['submit'])) {


     if (empty($_POST['username']) || empty($_POST['password'])) {

			echo "Please Enter username or password";

		}
		else {

			$username=$_POST['username'];
               $password=$_POST['password'];
			    $connection = new DataBase();
				$conobj=$connection->OpenCon();

				$userQuery=$connection->CheckUser($conobj,"login",$username,$password);

				if ($userQuery->num_rows > 0) {

					session_start();
				 
				    $_SESSION['user'] = $_POST['username'];
			        header('Location: Profile.php');
				   }
				 else {
				 	echo "<br>";
				echo "Username or Password is invalid";
				echo "<br>";
				}
				$connection->CloseCon($conobj);



		}
	}


?>