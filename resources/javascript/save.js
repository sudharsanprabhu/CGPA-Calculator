function save()
  { 
    	
     switch(semester)
	 {
		 case "1": save_grade=a;break; 
		 case "2": save_grade=b;break;
		 case "3": save_grade=c;break;
		 case "4": save_grade=d;break;
		 case "5": save_grade=e;break;
		 case "6": save_grade=f;break;
		 case "7": save_grade=g;break;
		 case "8": save_grade=h;break;
	 }		 

     var gradeChar=[];
	 for(var i=0;i<save_grade.length;i++)
	 {
		if(save_grade[i]==10)
		{
	     gradeChar[i]='O';
    	}
		else if(save_grade[i]==9)
		{
	     gradeChar[i]='A+';
    	}
		else if(save_grade[i]==8)
		{
	     gradeChar[i]='A';
    	}
		else if(save_grade[i]==7)
		{
	     gradeChar[i]='B+';
    	}
		else if(save_grade[i]==6)
		{
	     gradeChar[i]='B';
    	}
		else if(save_grade[i]==0)
		{
         gradeChar[i]='RA/SA';
        }	
        else{}		
		
	}
	 
	var gradeString=gradeChar.toString();
	 
	 
	$.ajax({
			type: "POST",
			url: "insert.php",
			data: {"grade": gradeString, "sem": semester, "gpa": gpa},
			cache: false,
			success: function(result)
			{
			 open_message_box();
	         document.getElementById("show_message").innerHTML=result;       					
			}
	       	
	});
	
  }