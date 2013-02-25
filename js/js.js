$(document).ready(function() {
	$(".hide").hide();
	$(".hidet").hide();

$(".show").click(function(){
	$(".hide").show();
});

  $(".check").click(function(){


		if ($(".check").is(":checked"))
		{
			
			$("#extra").show("fast");
			$("#add").addClass("required");
		}
		else
		{
			
			$("#extra").hide("fast");
			$("#add").removeClass("required");
		}
	  });
    $(".checkt").click(function(){


		if ($(".checkt").is(":checked"))
		{
			
			$("#extrat").show("fast");
			
		}
		else
		{
			
			$("#extrat").hide("fast");
		}
	  });
$("#commentForm").validate();

});