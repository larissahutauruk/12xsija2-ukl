<?php
include_once('index.php');
$id= $_GET['id'];
$result=mysqli_query($mysqli, "DELETE FROM user WHERE id_user=$id");
header("location: index.php");
?>