function policy()
{
	var x = document.getElementsByClassName("scheme");
	if(x[0].value=="%ge") 
	{
		var z1 = document.createAttribute("min");	
		var z2 =document.createAttribute("max");
		var y = document.getElementById("grade10");
		z1.value = "0";	
		z2.value = "100";
		y.setAttributeNode(z1);
		y.setAttributeNode(z2);
	

	}
	if(x[0].value=="cgpa") 
	{
		var z1 = document.createAttribute("min");	
		var z2 =document.createAttribute("max");
		var y = document.getElementById("grade10");
		z1.value = "0";	
		z2.value = "10";
		y.setAttributeNode(z1);
		y.setAttributeNode(z2);
	

	}
	if(x[1].value=="%ge") 
	{
		var z1 = document.createAttribute("min");	
		var z2 =document.createAttribute("max");
		var y = document.getElementById("grade12");
		z1.value = "0";	
		z2.value = "100";
		y.setAttributeNode(z1);
		y.setAttributeNode(z2);
	

	}
	if(x[1].value=="cgpa") 
	{
		var z1 = document.createAttribute("min");	
		var z2 =document.createAttribute("max");
		var y = document.getElementById("grade12");
		z1.value = "0";	
		z2.value = "10";
		y.setAttributeNode(z1);
		y.setAttributeNode(z2);
	

	}
	if(x[2].value=="%ge") 
	{
		var z1 = document.createAttribute("min");	
		var z2 =document.createAttribute("max");
		var y = document.getElementById("gradecol");
		z1.value = "0";	
		z2.value = "100";
		y.setAttributeNode(z1);
		y.setAttributeNode(z2);
	

	}
	if(x[2].value=="cgpa") 
	{
		var z1 = document.createAttribute("min");	
		var z2 =document.createAttribute("max");
		var y = document.getElementById("gradecol");
		z1.value = "0";	
		z2.value = "10";
		y.setAttributeNode(z1);
		y.setAttributeNode(z2);
	

	}

	var scale = document.getElementsByClassName("scheme");
	var a = document.getElementById("grade10");
 	if(scale[0].value != "")
 		a.disabled = false;
 	var b = document.getElementById("grade12")
 	if(scale[1].value != "")
 		b.disabled = false;
 	var c = document.getElementById("gradecol")
 	if(scale[2].value != "")
 		c.disabled = false;
}

function inval()
{
	var x, y, flag = 0, count1 = 0, count2 = 0, count3 = 0, count4 = 0, count5 = 0, count6 = 0, count7 = 0, count8 = 0, count9 = 0, count10 = 0, count11 = 0;
  	x = document.getElementsByClassName("board");
  	var len1 = x[0].value.length;
 	var len2 = x[1].value.length;
 	var t1 = x[0].value.trim();
 	var t2 = x[1].value.trim();
 	if(t1.length < 1 || t2.length < 1)
 	{
 		var text = document.getElementsByClassName("checkboard");
 		if(t1.length < 1)
 		{
 			text[0].innerHTML= "**Invalid board name";
 			count1 = 1;
 		}
 		if(t2.length < 1)
 		{
 			text[1].innerHTML= "**Invalid board name";
 			count2 = 1;
		}
	}
 	if (!(isNaN(x[0].value)) || !(isNaN(x[1].value)) || len1 < 3 || len2 < 3)
 	{
 		var text = document.getElementsByClassName("checkboard");
 		if(!isNaN(x[0].value) || len1 < 3)
 		{
 			text[0].innerHTML= "**Invalid board name";
 			cunt1 = 1;
 		}
 		if(!isNaN(x[1].value) || len2 < 3)
 		{
 			text[1].innerHTML= "**Invalid board name";
 			count2 = 1;
 		}

 	}
 	if(len1 > 3 || len2 > 3)
 	{
 		var text = document.getElementsByClassName("checkboard");
 		if(isNaN(x[0].value) && len1 > 3)
 		{
 			text[0].innerHTML= "";
 			count1 = 0;

 		}
 		if(isNaN(x[1].value) && len2 > 3)
 		{
 			text[1].innerHTML= "";
 			count2 = 0;
 		}
 	}
	y = document.getElementsByClassName("colname");
 	var len3 = y[0].value.length;
 	var len4 = y[1].value.length;
 	var nam1 = document.getElementById("university");
 	var nam2 = document.getElementById("collegename");

 	var t1 = x[0].value.trim();
 	var t2 = x[1].value.trim();
 	if(t1.length < 1 || t2.length < 1)
 	{
 		var text = document.getElementsByClassName("checkboard");
 		if(t1.length < 1)
 		{
 			text[0].innerHTML= "**Invalid board name";
 			count1 = 1;
 		}
 		if(t2.length < 1)
 		{
 			text[1].innerHTML= "**Invalid board name";
 			count2 = 1;
		}
	}


 	if(!(isNaN(y[0].value)) || !(isNaN(y[1].value)) || len3 < 3 || len4 < 3)
 	{
 		if(!(isNaN(y[0].value)) || len3 < 3)
 		{
 	 		nam1.innerHTML = "**Invalid University name";
 	 		count3 = 1;
 		}
 		if(!(isNaN(y[1].value)) || len4 < 3)
 		{
 			nam2.innerHTML = "**Invalid College name";
 			count4 = 1;
 		}
 	}
 	if(isNaN(y[0].value) && len3 > 3)
	{
 		nam1.innerHTML = "";
 		count3 = 0;
	}
	if(isNaN(y[1].value) && len4 > 3)
 	{
 		nam2.innerHTML = "";
		count4 = 0;
 	}
 	var drop = document.getElementById("state").value;
 	if(drop == "")
 	{
 		var nam2 = document.getElementById("statename");
 		nam2.innerHTML ="**Please select your state"
 		count5 = 1;
 	}
 	else
 	{
 		var nam2 = document.getElementById("statename");
 		nam2.innerHTML =""
 		count5 = 0;

 	}
 	var scale = document.getElementsByClassName("scheme");
 	var scales = document.getElementsByClassName("scale");
 	if(scale[0].value == "")
 	{
 		scales[0].innerHTML = "**Select your scale";
 		count6 = 1;
 	}
 	else
 	{
 		scales[0].innerHTML = "";
 		count6 = 0;
 	}
 	if(scale[1].value == "")
 	{
 		scales[1].innerHTML = "**Select your scale";
 		count7 = 1;
 	}
 	else
 	{
 		scales[1].innerHTML = "";
 		count7 = 0;
 	}
 	if(scale[2].value == "")
 	{
 		scales[2].innerHTML = "**Select your scale";
 		count8 = 1;
 	}
 	else
 	{
 		scales[2].innerHTML = "";
 		count8 = 0;
 	}

 	var sco = document.getElementsByClassName("score");
 	var p1 = document.getElementById("grade10");
 	var p2 = document.getElementById("grade12");
 	var p3 = document.getElementById("gradecol");
 	if(p1.value == "")
 	{
 		sco[0].innerHTML = "**Invalid";
 		count9 = 1;
 	}
 	if(p1.value.length >= 1)
 	{
 		sco[0].innerHTML = "";
 		count9 = 0;
 	}
 	if(p2.value == "")
 	{
 		sco[1].innerHTML = "**Invalid";
 		count10 = 1;
 	}
 	if(p2.value.length >= 1)
 	{
 		sco[1].innerHTML = "";
 		count10 = 0;
 	}
 	if(p3.value == "")
 	{
 		sco[2].innerHTML = "**Invalid";
 		count11 = 1;
 	}
 	if(p3.value.length >= 1)
 	{
 		sco[2].innerHTML = "";
 		count11 = 0;
 	}

 	if(count1 == 0 && count2 == 0 && count3 == 0 && count4 == 0 && count5 == 0 && count6 == 0 && count7 == 0 && count8 == 0 && count9 == 0 && count10 == 0 && count11 == 0)
 		return true;
 	else
 		return false;
}


function loginvalid()
{
	var eyes = 0;
	var pyes = 0;
	var e = document.getElementById("le");
	var p = document.getElementById("lp");
	var len = p.value.length;
	if(len > 4)
  		pyes = 1;
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e.value))
    	eyes = 1;
	if(eyes == 0 && pyes == 0)
	{
		var a = document.getElementById("lee");
		var b = document.getElementById("lpe");
		a.innerHTML = "**Invalid Format";
		b.innerHTML = "**Invalid Format";
		return false;
	}
	else if(eyes != 0 && pyes == 0)
	{
		var a = document.getElementById("lee");
		var b = document.getElementById("lpe");
		a.innerHTML = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		b.innerHTML = "**Invalid Format";
		return false;
	}
	else if(eyes == 0 && pyes != 0)
	{
		var a = document.getElementById("lee");
		var b = document.getElementById("lpe");
		a.innerHTML = "**Invalid Format";
		b.innerHTML = "";
		return false;
	}
	else
		return true;

}


function validate()
{

var flag = 0;
var x = document.getElementById("firstname").value;
x=x.trim();
var pattern =/^[a-zA-Z ]*$/;

if(!(x.match(pattern) && x.length!=0)) {
//alert("hii");

var a = document.getElementById("spf");
a.innerHTML = "**invalid firstname";
flag = 1;
}
else
{
var a = document.getElementById("spf");
a.innerHTML = "";
//flag=0;
}

var y = document.getElementById("last").value;
y=y.trim();

if(!(y.match(pattern)))
 {
 var b = document.getElementById("spl");
b.innerHTML = "**invalid lastname";

 flag = 1;
 }
 else
{
var a = document.getElementById("spl");
a.innerHTML = "";

//flag=0;
}


var z = document.getElementsByName("gender");

if(!(z[0].checked ||z[1].checked || z[2].checked))
{
var c = document.getElementById("spg");
c.innerHTML = "**PLease select gender : ";

	flag = 1;
}
else 
{

var c = document.getElementById("spg");
c.innerHTML = "";
//flag=0;


}

var w = document.getElementsByName("emailid")[0].value;
var empat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

if(!(w.match(empat) && w.length!=0))
{
	var d = document.getElementById("spe");
	d.innerHTML = "**invalid e-mail format";

	flag = 1;
}
else 
{
	var d = document.getElementById("spe");
	d.innerHTML = "";
//flag=0;

}


var pass = document.getElementsByName("password")[0].value;

var conp = document.getElementsByName("conpas")[0].value

if(pass.length < 5){
	var d = document.getElementById("spcp");
	d.innerHTML = "**password too short(must be atleast 6 characters long)";
flag = 1;

}
else if(pass!=conp)
{
var d = document.getElementById("spcp");
	d.innerHTML = "**password mismatch";
flag = 1;

}
else
{
var d = document.getElementById("spcp");
	d.innerHTML = "";


//	flag=0;

}

//if(x.value!="/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i")
//{
//alert("invalid firstname");
//}
if(flag==0)
	return true;
else
	return false;
}
