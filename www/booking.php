<?php
$movieSession = $_GET[ "sessionID" ];

$db_host = '192.168.56.12';
$db_name = 'hvlofi';
$db_user = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO( $pdo_dsn, $db_user, $db_passwd );

$q = $pdo->query( "SELECT * FROM cinemaSessions WHERE sessionID = '" . $movieSession . "'" );
$row = $q->fetch();

$movieName = $row[ "movieName" ];
$movieYear = $row[ "movieYear" ];
$cinemaRoom = $row[ "cinemaRoom" ];
$sessionTime = $row[ "sessionDateTime" ];

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
<p>Please confirm your booking for the following session</p>
<h2>Confirm Booking Session</h2>
<table>
  <tbody>
    <tr>
      <td>Movie Name</td>
      <td><?php echo $movieName ?></td>
    </tr>
    <tr>
      <td>Movie Year</td>
      <td><?php echo $movieYear ?></td>
    </tr>
    <tr>
      <td>Cinema Room</td>
      <td><?php echo $cinemaRoom ?></td>
    </tr>
    <tr>
      <td>Session Date and Time</td>
      <td><?php echo $sessionTime ?></td>
    </tr>
  </tbody>
</table>
<p>To complete booking please enter your details below</p>
<form action="processing.php" method="post">
  <input type="hidden" id="movieSession" name="movieSession" value=<?php echo "'".$movieSession."'" ?>>
  <label for="fname">First name:</label>
  <br>
  <input type="text" id="fname" name="fname" required>
  <br>
  <label for="lname">Last name:</label>
  <br>
  <input type="text" id="lname" name="lname" required>
  <br>
  <br>
  <input type="submit" value="Submit">
</form>
<?php echo "<a href='movie.php?movieName=".$movieName."&movieYear=".$movieYear."'>Go back to movie details</a>" ?>
</body>
</html>