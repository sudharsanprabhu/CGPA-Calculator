var semester,save_grade,check_load=0;

function open_sems_list()
{
	 document.getElementById("click_sem").style.top='80px';
	 document.getElementById("list_semesters").style.height='100%';
}	 

function sem_1()
{   if(check_load==0)
	{
	default_execution();
	document.getElementById("sem1").style.height='100%';
	semester='1';
	}
	else
	{
		semester=1;
		load_results();
	}	
		
}	 

function sem_2()
{   if(check_load==0)
	{
	default_execution();
	document.getElementById("sem2").style.height='100%';
	semester='2';
	}
	else
	{
		semester=2;
		load_results();
	}
}

function sem_3()
{   if(check_load==0)
	{
	default_execution();
	document.getElementById("sem3").style.height='100%';
	semester='3';
	}
	else
	{
		semester=3;
		load_results();
	}
}

function sem_4()
{   if(check_load==0)
	{
	default_execution();
	document.getElementById("sem4").style.height='100%';
	semester='4';
	}
	else
	{
		semester=4;
		load_results();
	}
}

function sem_5()
{   if(check_load==0)
	{
	default_execution();
	document.getElementById("sem5").style.height='100%';
	semester='5';
	}
	else
	{
		semester=5;
		load_results();
	}
}

function sem_6()
{
	if(check_load==0)
	{
	default_execution();
	document.getElementById("sem6").style.height='100%';
	semester='6';
	}
	else
	{
		semester=6;
		load_results();
	}
}

function sem_7()
{   if(check_load==0)
	{
	default_execution();
	document.getElementById("sem7").style.height='100%';
	semester='7';
	}
	else
	{
		semester=7;
		load_results();
	}
}

function sem_8()
{   if(check_load==0)
	{
	default_execution();
	document.getElementById("sem8").style.height='100%';
	semester='8';
	}
	else
	{
		semester=8;
		load_results();
	}
}








function default_execution()
{
	document.getElementById("list_semesters").style.height='0';
	document.getElementById("click_sem").style.top='-100%';
	document.getElementById("button_box").style.top='50%';
	

	}


function cancel_calc()
{
	document.getElementById("sem1").style.height='0';
	document.getElementById("sem2").style.height='0';
	document.getElementById("sem3").style.height='0';
	document.getElementById("sem4").style.height='0';
	document.getElementById("sem5").style.height='0';
	document.getElementById("sem6").style.height='0';
	document.getElementById("sem7").style.height='0';
	document.getElementById("sem8").style.height='0';
	
	document.getElementById("click_sem").style.top='50%';
	
	document.getElementById("button_box").style.top='-100%';
	
	document.getElementById("show_result").style.height='0px';
	document.getElementById("show_result").style.top='0px';
 
    document.getElementById("message_box").style.height='0px';
    document.getElementById("message_box").style.top='0px'; 
}

function calculate_gpa()
{
	document.getElementById("show_result").style.height='450px';
    document.getElementById("show_result").style.top='50%';
	calc(semester);
}	

function close_result_box()
{
	document.getElementById("show_result").style.height='0px';
	document.getElementById("show_result").style.top='0px';
}	
	 
	 
function open_message_box()
{
    document.getElementById("message_box").style.height='450px';
    document.getElementById("message_box").style.top='50%';
}	

function close_message_box()
{
    document.getElementById("message_box").style.height='0px';
    document.getElementById("message_box").style.top='0px';
	
}



function open_delete_message_box()
{
    document.getElementById("delete_message_box").style.height='450px';
    document.getElementById("delete_message_box").style.top='50%';
}	

function close_delete_message_box()
{
    document.getElementById("delete_message_box").style.height='0px';
    document.getElementById("delete_message_box").style.top='0px';
	window.location.reload();
	
}