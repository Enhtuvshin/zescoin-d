<?php
if (isset($_POST["id"])){
    $id = $_POST["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datas";

$con= mysqli_connect($servername, $username, $password, $dbname);

$sql = "DELETE FROM clients WHERE id=$id";
$connection->query($sql);

}

header("location:/zescoin/home.php");
exit;

?>