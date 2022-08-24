<?php
$movieName = $_GET[ "movieName" ];
$movieYear = $_GET[ "movieYear" ];

$db_host = '192.168.56.12';
$db_name = 'hvlofi';
$db_user = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO( $pdo_dsn, $db_user, $db_passwd );

$q = $pdo->query( "SELECT * FROM movie WHERE movieName = '" . $movieName . "' && movieYear = '" . $movieYear . "'" );

$row = $q->fetch();
$movieDirector = $row[ "movieDirector" ];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Otago Cinema</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Otago Cinema</h1>
<?php
echo "<h2>" . $movieName . "</h2>";
?>
<table>
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
<h2>Available sessions</h2>
<table>
  <tbody>
    <tr>
      <th> Cinema Room</th>
      <th>Date and Time</th>
    </tr>
    <?php
    $q = $pdo->query( "SELECT * FROM cinemaSessions WHERE movieName = '" . $movieName . "' && movieYear = '" . $movieYear . "'" );
    while ( $row = $q->fetch() ) {
      echo "<tr><td>" . $row[ "cinemaRoom" ] . "</td><td><a href='booking.php?sessionID=" . $row[ "sessionID" ] . "'>" . $row[ "sessionDateTime" ] . "</a></td></tr>";
    }
    ?>
  </tbody>
</table>
<a href="index.php">Go back to homepage</a>
</body>
</html>