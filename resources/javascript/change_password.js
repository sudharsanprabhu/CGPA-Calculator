function change_password()
{ 
    document.getElementById("pwd_box").style.height='450px';
    document.getElementById("pwd_box").style.top='50%';
}

function update_password()
{ 
    var new_pwd=document.getElementById("new_password").value;	 
	var username=localStorage._usr;
	$.ajax({
		type: "post",
		url: "change_password.php",
		data: {"username": username, "password": new_pwd},
		cache: false,
		success: function(result)
		{
			document.getElementById("pwd_query").innerHTML=result;
		}
	});	
	
	return false;
}

function close_pwd_box()
{
    document.getElementById("pwd_box").style.height='0';
    document.getElementById("pwd_box").style.top='0';
    window.location.reload();	
}