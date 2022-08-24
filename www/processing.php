<?php
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
  $sessionID = $_POST[ 'movieSession' ];
  $firstName = $_POST[ 'fname' ];
  $lastName = $_POST[ 'lname' ];

  $db_host = '192.168.56.12';
  $db_name = 'hvlofi';
  $db_user = 'webuser';
  $db_passwd = 'insecure_db_pw';

  $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
  $pdo = new PDO( $pdo_dsn, $db_user, $db_passwd );
  $q = $pdo->prepare( "INSERT INTO booking (sessionID, firstName, lastName) VALUES (?,?,?)" );
  $q->execute( [ $sessionID, $firstName, $lastName ] );
  header( "Location: success.php" );
  exit();
} else {
  header( "Location: error.php" );
  exit();
}
?>