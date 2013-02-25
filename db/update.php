<?php
$case = htmlspecialchars($_POST['case']);
$rdone = htmlspecialchars($_POST['rdone']);
$tdone = htmlspecialchars($_POST['tdone']);
$note = htmlspecialchars($_POST['note']);

include_once("../db/connect.php");

		
				mysql_query("UPDATE ... SET ...='$rdone'
				WHERE ...='$case'");
				
				mysql_query("UPDATE ... SET ...='$tdone'
				WHERE ...='$case'");
				if(!empty($note))
				{
					mysql_query("UPDATE ... SET ... ='$note'
					WHERE ...='$case'");
				}//end if	



require_once("../sub/update.html");

mysql_close($con);


?>