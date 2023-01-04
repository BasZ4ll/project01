<?php
include "conn.php";
$dsn        = "mysql:host=$hostname;dbname=$dbname";
try {
$db = new PDO($dsn, $userad, $passwordad);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$sth = $db->query("SELECT * FROM student");
$locations = $sth->fetchAll();

echo json_encode( $locations );

} catch (Exception $e) {
echo $e->getMessage();
}

?>