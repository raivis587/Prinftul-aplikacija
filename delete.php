<?php 
include 'db.php';
$Nr = $_GET['Nr'];


$sql = "delete from uzdevumi1 where Nr='$Nr'";


$val = $db->query($sql);

if($val){

header('location: index.php');

};


 ?>