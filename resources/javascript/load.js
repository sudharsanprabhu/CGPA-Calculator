function load()
{   
  $.ajax({
		    type: "POST",
			url: "load.php",
			cache: false,
			success: function(result)
			{
				var data=JSON.parse(result);
				
				var load_sem1=data[0];
				var load_sem2=data[1];
				var load_sem3=data[2];
				var load_sem4=data[3];
				var load_sem5=data[4];
				var load_sem6=data[5];
				var load_sem7=data[6];
				var load_sem8=data[7];
				
				var load_gpa=[];
				 load_gpa[0]=data[8];
				 load_gpa[1]=data[9];
				 load_gpa[2]=data[10];
				 load_gpa[3]=data[11];
				 load_gpa[4]=data[12];
				 load_gpa[5]=data[13];
				 load_gpa[6]=data[14];
				 load_gpa[7]=data[15];
				

				var load_a=load_sem1.split(",");
				var load_b=load_sem2.split(",");
				var load_c=load_sem3.split(",");
				var load_d=load_sem4.split(",");
				var load_e=load_sem5.split(",");
				var load_f=load_sem6.split(",");
				var load_g=load_sem7.split(",");
				var load_h=load_sem8.split(",");
				
			    
                for(var i=0;i<load_a.length;i++)
				{
					document.getElementById("a["+i+"]").innerHTML=load_a[i];
				}
				
                for(var i=0;i<load_b.length;i++)
				{
					document.getElementById("b["+i+"]").innerHTML=load_b[i];
				}
				
                for(var i=0;i<load_c.length;i++)
				{
					document.getElementById("c["+i+"]").innerHTML=load_c[i];
				}
				
                for(var i=0;i<load_d.length;i++)
				{
					document.getElementById("d["+i+"]").innerHTML=load_d[i];
				}
				
                for(var i=0;i<load_e.length;i++)
				{
					document.getElementById("e["+i+"]").innerHTML=load_e[i];
				}
				
                for(var i=0;i<load_f.length;i++)
				{
					document.getElementById("f["+i+"]").innerHTML=load_f[i];
				}
				
                for(var i=0;i<load_g.length;i++)
				{
					document.getElementById("g["+i+"]").innerHTML=load_g[i];
				}
				
                for(var i=0;i<load_h.length;i++)
				{
					document.getElementById("h["+i+"]").innerHTML=load_h[i];
				}

				 //load gpa values
 				 
				for(var i=0;i<8;i++)
				{
				document.getElementById("load_gpa["+i+"]").innerHTML=load_gpa[i];
				}
	    }
  });





    check_load=1;
    document.getElementById("lsem1").style.top='-100%';
	document.getElementById("lsem2").style.top='-100%';
	document.getElementById("lsem3").style.top='-100%';
	document.getElementById("lsem4").style.top='-100%';
	document.getElementById("lsem5").style.top='-100%';
	document.getElementById("lsem6").style.top='-100%';
	document.getElementById("lsem7").style.top='-100%';
	document.getElementById("lsem8").style.top='-100%';
	
	open_sems_list();	
}

function load_results()
{
	//reset check_load to 0
	check_load=0;
	
	document.getElementById("list_semesters").style.height='0';
	document.getElementById("click_sem").style.top='-100%';
	
	switch(semester)
	{
		case 1:document.getElementById("lsem1").style.top='50%';break;
		case 2:document.getElementById("lsem2").style.top='50%';break;
		case 3:document.getElementById("lsem3").style.top='50%';break;
		case 4:document.getElementById("lsem4").style.top='50%';break;
		case 5:document.getElementById("lsem5").style.top='50%';break;
		case 6:document.getElementById("lsem6").style.top='50%';break;
		case 7:document.getElementById("lsem7").style.top='50%';break;
		case 8:document.getElementById("lsem8").style.top='50%';break;
	}	
}

function close_load_box()
{
	document.getElementById("lsem1").style.top='-100%';
	document.getElementById("lsem2").style.top='-100%';
	document.getElementById("lsem3").style.top='-100%';
	document.getElementById("lsem4").style.top='-100%';
	document.getElementById("lsem5").style.top='-100%';
	document.getElementById("lsem6").style.top='-100%';
	document.getElementById("lsem7").style.top='-100%';
	document.getElementById("lsem8").style.top='-100%';
	
	document.getElementById("click_sem").style.top='50%';
}	
