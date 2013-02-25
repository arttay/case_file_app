<html>
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
<form action="../db/update.php" method="post" id = "commentForm">

Case Number<br />
<input type = "text" name = "case" class = "required" required  /><br />

Redhawk Done?<br />
<input type = "radio" name = "rdone" value = "yes" />Yes
<input type = "radio" name = "rdone" value = "no" />No<br />
TD Done?<br />
<input type = "radio" name = "tdone" value = "yes" />Yes
<input type = "radio" name = "tdone" value = "no" />No<br />
Notes<br />
<textarea name = 'note'></textarea><br />

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
</div><!--end change-->


</div><!--end wrapper-->
</body>
</html>