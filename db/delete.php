<?php
$case = htmlspecialchars($_POST['case']);
$account = htmlspecialchars($_POST['account']);

include_once("../db/connect.php");


$sql="DELETE FROM ... WHERE ... =$case AND ... = $account";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  	require_once("../sub/delete.html");














mysql_close($con);




?>