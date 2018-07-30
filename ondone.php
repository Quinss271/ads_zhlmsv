<?php

$db = mysqli_connect("127.0.0.1","root","root","ads_db") ;
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $fio = $_POST['fio'];
  $adress = $_POST['adress'];
  $status = $_POST['status'];
  $comm = $_POST['comm'];
  $dataofstart = date("Y-m-d");
  
   $result = mysqli_query($db, "INSERT INTO `reqs` (`fio`, `adress`, `dataofstart`, `status`, `comm`) VALUES ('".$fio."', '".$adress."', '".$dataofstart."', '".$status."', '".$comm."')");
  	echo $result;

?>