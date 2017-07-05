<?php
	/*** Important do not change ***/
	session_start();
	if(!isset($_SESSION['simple_login'])){
		header("Location: index.php");
		exit();
	}
	/*** Important END ***/
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>

<h1>test</h1>

</body>

</html>
