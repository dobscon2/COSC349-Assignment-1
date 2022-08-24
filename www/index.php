<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Otago Cinema</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Otago Cinema</h1>
<p>Welcome to Otago Cinema, we offer many movies for your viewing pleasure.</p>
<h2>Current Movies Available</h2>
<p>Please select a movie to booking a session</p>
<ul>
  <?php
  $db_host = '192.168.56.12';
  $db_name = 'hvlofi';
  $db_user = 'webuser';
  $db_passwd = 'insecure_db_pw';

  $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
  $pdo = new PDO( $pdo_dsn, $db_user, $db_passwd );

  $q = $pdo->query( "SELECT * FROM movie" );

  while ( $row = $q->fetch() ) {
    echo "<li><a href='movie.php?movieName=" . $row[ "movieName" ] . "&movieYear=" . $row[ "movieYear" ] . "'>" . $row[ "movieName" ] . " - " . $row[ "movieYear" ] . "</a></li>";
  }

  ?>
</ul>
</body>
</html>
