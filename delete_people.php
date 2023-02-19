<?php
require("connect.php");

$id=$_GET["id"];

$sql="DELETE FROM databank WHERE id=$id";
$conn->query($sql);
header( "location: list_people.php" );
?>