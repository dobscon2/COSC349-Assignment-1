<?php
	$movieName = $_GET["movieName"];
	$movieYear = $_GET["movieYear"];

	$db_host = '192.168.56.12';
	$db_name = 'hvlofi';
	$db_user = 'webuser';
	$db_passwd = 'insecure_db_pw';
	
	$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
	$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

	$q = $pdo->query("SELECT * FROM movie WHERE movieName = '".$movieName."'");

	$row = $q->fetch();
	$movieDirector = $row["movieDirector"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Otago Cinema</title>
</head>

<body>
	<h1>Otago Cinema</h1>
	<?php
		echo "<h2>".$movieName."</h2>";
	?>
	
	<table width="200" border="1">
  <caption>
    Movie Details
  </caption>
  <tbody>
    <tr>
      <td>Year Released</td>
      <td><?php echo $movieYear ?></td>
    </tr>
    <tr>
      <td>Director</td>
      <td><?php echo $movieDirector ?></td>
    </tr>
  </tbody>
</table>

</body>
</html>