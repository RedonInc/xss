<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
	<input type="submit">
    </form>

<?php

header ("X-XSS-Protection: 0");
if( array_key_exists( "fname", $_POST ) && $_POST[ "fname" ] != NULL ) {
	$name = $_POST['fname'];
	echo "$name";
}

?>

</body>
</html>
