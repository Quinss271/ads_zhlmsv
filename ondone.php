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
	$numberof = mysqli_query($db, "SELECT MAX(id) FROM reqs");
	$numberof = mysqli_fetch_array($numberof);
	$idf = mysqli_query($db, "SELECT `id` FROM `reqs` WHERE `id` = ".($numberof[0]-1)." LIMIT 0, 30");
	$idf = mysqli_fetch_array($idf);
   	mysqli_query($db, "UPDATE `reqs` SET  `status` =  'Done' WHERE `id` = ".$idf[0]."");

}
?>