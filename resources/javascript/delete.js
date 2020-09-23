function clr()
{
	open_delete_message_box();
}

function perform_delete()
{

	$.ajax({
			type: "POST",
			url: "delete.php",
			cache: false,
			success: function(result)
			{
	         document.getElementById("show_delete_message").innerHTML=result;       					
			}
	});
	
}	