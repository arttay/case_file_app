<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
	<script src="../js/js.js"></script>
	<link rel = 'stylesheet' href ='../css/delete.css' />
	</head>

<body>
<div id = "wrapper">
<div class = "change">
	<fieldset>
	<div class = "left">
		<?php
				include_once("../inc/nav.html");
				?>	
			</div>

<form action="../db/delete.php" method="post" id = "commentForm">
Please enter the following information for what you wish to delete<br /><br />

Case Number<br />
<input type = "text" name = "case" class = "required" required  /><br />
Account Number <br />
<input type = "text" name = "account" class = "required" required  /><br />


<input type="submit" value = "Submit">
</form>
Check for case files and numbers<br />
<input type ="checkbox" class  ="checkt" />
<div class ="hidet" id = "extrat">

<?php
include_once("../php/show.php");
?>

</div><!--end extra-->

</fieldset>
</div><!--end change div-->


</div><!--end wrapper-->
</body>
</html>