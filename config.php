<?php
$db = mysqli_connect("127.0.0.1","root","root","ads_db") ;
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>