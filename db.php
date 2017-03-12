<?php
date_default_timezone_set('UTC');

$db_host     = "db";
$db_username = "root";
$db_password = "root";

$conn = mysqli_connect ( $db_host, $db_username, $db_password ) ;
$result = mysqli_query ( $conn, "show databases" ) ;

echo date('l jS \of F Y h:i:s A') . "<br /><br />";

$resArr = array ( ) ;
while ( $data = mysqli_fetch_array ( $result ) ) {
  $resArr[] = $data ;
}

?>
<pre>
<?php print_r ( $resArr ) ; ?>
</pre>
