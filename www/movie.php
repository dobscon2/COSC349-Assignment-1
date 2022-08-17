<?php
	$movieName = $_GET["movieName"];
	$movieYear = $_GET["movieYear"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Otago Cinema</title>
</head>

<body>
	<h1>Otago Cinema</h1>
	<p>Test below</p>
	<?php
		echo "<p>".$movieName." - ".$movieYear."</p>";
	?>
</body>
</html>