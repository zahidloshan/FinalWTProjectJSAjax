<?php


include('BookAddValidation.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Add</title>
	<script src="JS/JSBook.js"></script>
</head>
<body>

	<h1>Add Book</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
    <p id="mytext"></p>
	<fieldset>
    <legend>Book Information </legend>

	<label for="bookName">Book Title : </label>
	<input type="text" id="bookName" name="bname" value="<?php echo $bookName ?>">
	<p><?php echo $bookNameErr; ?></p>


	
     <br>
     <!-- Book Id -->
        <label for="bId">Book Id : </label>
		<input type="text" name="bid" id="bId" value="<?php echo $bId ?>">
		<p><?php echo $bIdErr; ?></p>	

	<br>

     

	<!-- Author  -->
		<label for="bAuthor">Authr : </label>
		<input type="text" name="bauthor" id="bAuthor" value="<?php echo $bAuthor ?>">
		<p><?php echo $bAuthorErr; ?></p>

	<br>

		<!-- Publisher -->
        <label for="bPublisher">Publisher : </label>
		<input type="text" name="bpublisher" id="bPublisher" value="<?php echo $bPublisher ?>">
		<p><?php echo $bPublisherErr; ?></p>

    <br>

			

	<!-- Edition  -->
        <label for="bEdition">Book Edition : </label>
		<input type="text" name="bedition" id="bEdition" value="<?php echo $bEdition ?>">
		<p><?php echo $bEditionErr; ?></p>
	<br>

	

	<!-- Book Price -->
        <label for="bPrice">Book Price : </label>
		<input type="text" name="bprice" id="bPrice" value="<?php echo $bPrice ?>">
		<p><?php echo $bPriceErr; ?></p>	

	<br>

	<!-- Book Quantity -->
        <label for="bQuantity">Book Quantity : </label>
		<input type="text" name="bquantity" id="bQuantity" value="<?php echo $bQuantity ?>">
		<p><?php echo $bQuantityErr; ?></p>
	<!-- Book Picture -->
        <label for="bPicture">Book Picture : </label>
		<input type="file" name="file" id="bPicture" value="<?php echo $bPicture ?>">
		<!--<p><?php echo $bPictureErr; ?></p>	-->



	</fieldset>


	<input type="submit" name="submit">
	<br>

	<br>

	<button type="button"> <a href="Profile.php">Back!</a> </button>
    </form>

</body>
</html>