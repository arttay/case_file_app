<?php

include_once("connect.php");


$today = date('Y-m-d');

$sql = "SELECT * from ... WHERE ... = 'no' AND ...='no'";

$result = mysql_query($sql,$con);
?>


<html>
<head>
	<link rel = 'stylesheet' href ='../css/css.css' /> 
	</head>
	<body>
		<div id = "wrappert">
				<div class = "topt">
					<?php
				include_once("../inc/nav.html");
				?>
				</div><!--end top div-->
		
<div class ="top">
			<?php
				include_once("../inc/db_nav.html");
				?>

</div><!--end div top-->


<table border = '1'>
<tr>
	<td class = 'bold'>Name</td>
			<td class = 'bold'>Case Number|</td>
			<td class = 'bold'>Account Number</td>
			<td class = 'bold'>Date created</td>
			<td class = 'bold'>Advisor</td>
			<td class = 'bold'>Redhawk done</td>
			<td class = 'bold'>TD done</td>
			<td class = 'bold'>Notes</td>
		</tr>
	

<?php
while($row = mysql_fetch_assoc($result)){

	echo "
		<tr>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		";
   // foreach($row as $cname => $cvalue){


    //    print "$cname: $cvalue\t";
      //   echo "<br />";
  //  }//end foreach
   // echo "<br />";

}//end while
?></table>      



<br />


<?php
mysql_close($con);
?>

</div><!--end wrapper-->





	</body>
	</html>












