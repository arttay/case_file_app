<?php
include_once("../php/var.php");



if(!empty($_POST['email']))
{

include_once("../mail/mailt.php");

	
}
include_once("../db/connect.php");


$sql="INSERT INTO ... (...)
VALUES
('$name', '$case', '$account', '$date', '$advisor', '$rdone', '$tdone', '$notes')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  	require_once("../sub/done.html");









mysql_close($con);








?>