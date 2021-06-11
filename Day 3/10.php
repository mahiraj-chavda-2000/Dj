<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mdahir');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$member=$_POST['member'];
$pr=$_POST['pr'];
$m=$member['0'];
$p=$pr['0'];
$sql = "INSERT INTO `mahi` ( `member`,`pr`) VALUES ('$m','$p')";

$result = mysqli_query($conn, $sql);
?>
