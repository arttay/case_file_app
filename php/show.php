<?php

	
include_once("../db/connect.php");

$today = date('Y-m-d');
$sql = "SELECT * from ...";


$result = mysql_query($sql,$con);

?>
<table>
<tr>
	<td class = 'bold'>Name</td>
			<td class = 'bold'>Case Number</td>
			<td class = 'bold'>Account Number</td>
		
		</tr>
	

<?php
while($row = mysql_fetch_assoc($result)){

	echo "
		<tr>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		<td>".$row['...']."</td>
		
		";


}//end while
?></table>  



