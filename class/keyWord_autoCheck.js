var xmlHttp

function deleteLine(id)
{
	document.getElementById("tr"+id+"").style.display='none'
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	  {
	  alert ("Browser does not support HTTP Request")
	  return
	  } 

	var url="class/weiboTrack.class.php"
	url=url+"?delId="+id
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=delStateChanged 
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}



function delStateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
	
	 
 } 
}

function changeAutoCheck(id,checked)
{
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request")
  return
  } 
if (checked !='1')
	checked = '0'

var url="class/keyWord.class.php"
url=url+"?autoReply="+id
url=url+"&checked="+checked
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
} 

function addNewReply(id)
{
	OpenWindow=window.open("ch/newReply.php?id="+id,'newwindow','height=200px,width=200px,menubar=no,    location:no')
}



function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
   alert("change success!");
 } 
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}