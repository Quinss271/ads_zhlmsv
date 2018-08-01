<?php

	include "config.php";
if (isset($fio)){
  $fio = $_POST['fio'];
  $adress = $_POST['adress'];
  $status = $_POST['status'];
  $comm = $_POST['comm'];
  $dataofstart = date("Y-m-d");  
  $result = mysqli_query($db, "INSERT INTO `reqs` (`fio`, `adress`, `dataofstart`, `status`, `comm`) VALUES ('".$fio."', '".$adress."', '".$dataofstart."', '".$status."', '".$comm."')");
}
else{
	$change = $_POST['change'];
   	mysqli_query($db, "INSERT INTO `reqs` (`status`) VALUES ('Done') WHERE `id` = 43");
}
?>