<!DOCTYPE html>
<html>
<head>
	<title>ATMOS | Into the sixth dimension</title>
	<?php include 'header.php';?>
</head>
<body>

	<main>
		<h1>Result</h1><hr>
<?php 
$x = htmlentities($_GET['sub']);
echo <<<EOL
This is output
And this is a new line
blah blah blah and this following $x will actually say Howdy as well

and now the output ends
EOL;
?>

	</main>
</body>
</html>

