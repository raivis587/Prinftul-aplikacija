<?php 
include 'db.php'; 
if(isset($_POST['send']))


$uzdevums = $_POST['task'];


$sql = "insert into uzdevumi1 (uzdevums) values ('$uzdevums') ";

$val = $db->query($sql);
if($val== true) 

	header('location:index.php');


 ?>