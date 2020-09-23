
   var a=[];
   var b=[];
   var c=[];
   var d=[];
   var e=[];
   var f=[];
   var g=[];
   var h=[];
   var credit;
   var gpa;
   
function calc()
 {
   
  switch(semester)
  { 
     
   case "1":
      
      a[0]=document.getElementById("e1").value;
      a[1]=document.getElementById("m1").value;
	  a[2]=document.getElementById("p1").value;
	  a[3]=document.getElementById("c1").value;
	  a[4]=document.getElementById("electronics").value;
	  a[5]=document.getElementById("eg").value;
	  a[6]=document.getElementById("science_lab").value;
	 
	  credit=(a[0]*4)+(a[1]*4)+(a[2]*3)+(a[3]*3)+(a[4]*3)+(a[5]*4)+(a[6]*2);
	  gpa=credit/23;
	  break;
	 
   case "2":
      b[0]=document.getElementById("e2").value;   
	  b[1]=document.getElementById("m2").value;
      b[2]=document.getElementById("p2").value;
      b[3]=document.getElementById("ct").value;
      b[4]=document.getElementById("evs").value;
	  b[5]=document.getElementById("cpl").value;
	  b[6]=document.getElementById("epl").value;
	  
	  credit=(b[0]*4)+(b[1]*4)+(b[2]*3)+(b[3]*3)+(b[4]*3)+(b[5]*2)+(b[6]*2);
	  gpa=credit/21;
	  break;
	  
   case "3":
      c[0]=document.getElementById("t_and_s").value;   
	  c[1]=document.getElementById("oops").value;
	  c[2]=document.getElementById("p_and_g").value;
	  c[3]=document.getElementById("rs").value;
	  c[4]=document.getElementById("c_t").value;
	  c[5]=document.getElementById("c_and_g").value;
	  c[6]=document.getElementById("pgs_lab").value;
	  c[7]=document.getElementById("oops_lab").value;
	  
	  credit=(c[0]*4)+(c[1]*3)+(c[2]*4)+(c[3]*3)+(c[4]*3)+(c[5]*3)+(c[6]*2)+(c[7]*2);
	  gpa=credit/24;
	  break;
	  
   case "4":
      d[0]=document.getElementById("n_and_g").value;   
	  d[1]=document.getElementById("geology").value;
	  d[2]=document.getElementById("geodatabase").value;
	  d[3]=document.getElementById("photogrammetry").value;
	  d[4]=document.getElementById("ms").value;
	  d[5]=document.getElementById("ug").value;
	  d[6]=document.getElementById("gps_lab").value;
	  d[7]=document.getElementById("gis_lab").value;
	  
	  credit=(d[0]*4)+(d[1]*3)+(d[2]*3)+(d[3]*4)+(d[4]*3)+(d[5]*3)+(d[6]*2)+(d[7]*2);
	  gpa=credit/24;
	  break;
	  
   case "5":
      e[0]=document.getElementById("geodesy").value;   
	  e[1]=document.getElementById("image_processing").value;
	  e[2]=document.getElementById("ars").value;
	  e[3]=document.getElementById("sm").value;
	  e[4]=document.getElementById("pe1").value;
	  e[5]=document.getElementById("pe2").value;
	  e[6]=document.getElementById("database_lab").value;
	  e[7]=document.getElementById("photo_lab").value;
      
      credit=(e[0]*4)+(e[1]*3)+(e[2]*3)+(e[3]*3)+(e[4]*3)+(e[5]*3)+(e[6]*2)+(e[7]*2);
      gpa=credit/23;
      break;
	  
   case "6":
      f[0]=document.getElementById("hydrology").value;   
      f[1]=document.getElementById("sap").value;
      f[2]=document.getElementById("osgis").value;
      f[3]=document.getElementById("sct").value;
      f[4]=document.getElementById("pe3").value;
      f[5]=document.getElementById("oe1").value;
      f[6]=document.getElementById("sap_lab").value;
      f[7]=document.getElementById("image_processing_lab").value;
      f[8]=document.getElementById("survey").value;
  
      credit=(f[0]*3)+(f[1]*3)+(f[2]*3)+(f[3]*3)+(f[4]*3)+(f[5]*3)+(f[6]*2)+(f[7]*2)+(f[8]*2);
      gpa=credit/24;
      break;

   case "7":
      g[0]=document.getElementById("support_system").value;   
      g[1]=document.getElementById("agri").value;
	  g[2]=document.getElementById("emp").value;
      g[3]=document.getElementById("ocean").value;
      g[4]=document.getElementById("pe4").value; 
      g[5]=document.getElementById("oe2").value;
      g[6]=document.getElementById("seminar").value;
      g[7]=document.getElementById("it").value;
  
      credit=(g[0]*3)+(g[1]*3)+(g[2]*3)+(g[3]*3)+(g[4]*3)+(g[5]*3)+(g[6]*1)+(g[7]*2);
      gpa=credit/21;
	  break;
	  
   case "8":
      h[0]=document.getElementById("pe5").value;  
      h[1]=document.getElementById("pe6").value;
      h[2]=document.getElementById("oe3").value;
      h[3]=document.getElementById("pw").value;
  
      credit=(h[0]*3)+(h[1]*3)+(h[2]*3)+(h[3]*10);
      gpa=credit/19;
	  break;
	 
	}

   document.getElementById("show_gpa").innerHTML=gpa;
 } 