<?php
  session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>register</title>
<meta name="generator" content="Bluefish 2.0.1" >
<meta name="shubham garg" content="">
<script language="JavaScript1.2">

//Highlight form element- © Dynamic Drive (www.dynamicdrive.com)
//For full source code, 100's more DHTML scripts, and TOS,
//visit http://www.dynamicdrive.com

var highlightcolor= "#FFFF80"

var ns6=document.getElementById&&!document.all
var previous=''
var eventobj

//Regular expression to highlight only form elements
var intended=/INPUT|TEXTAREA|SELECT|OPTION/

//Function to check whether element clicked is form element
function checkel(which){
if (which.style&&intended.test(which.tagName)){
if (ns6&&eventobj.nodeType==3)
eventobj=eventobj.parentNode.parentNode
return true
}
else
return false
}

//Function to highlight form element
function highlight(e){
eventobj=ns6? e.target : event.srcElement
if (previous!=''){
if (checkel(previous))
previous.style.backgroundColor=''
previous=eventobj
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
}
else{
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
previous=eventobj
}
}

</script>



<style type="text/css" >

body {margin-left: auto ; margin-right: auto ; background-color: #000000 ; color: #eeeeee ;}
div#leftsidebar { width: 50% ; margin-top: 1% ; margin-left: 2% ; margin-right: 2% ;float: left;font-size: 130%;}
div#rightsidebar { width: 40% ; margin-top: 1% ; margin-right: 2% ;float: left;}

</style>
</head>
<body>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<script language="JavaScript">
<!--

/***********************************************
* Required field(s) validation v1.10- By NavSurf
* Visit Nav Surf at http://navsurf.com
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

function formCheck(formobj){
	// Enter name of mandatory fields
	var fieldRequired = Array("firstname", "lastname" , "username" , "password" ,"password2" , "sex");
	// Enter field description to appear in the dialog box
	var fieldDescription = Array("First Name", "Last Name" ,"Username" ,"Password" ,"Re-type Password" ,"Sex" );
	// dialog message
	var alertMsg = "Please complete the following fields:\n";
	
	var l_Msg = alertMsg.length;
	
	for (var i = 0; i < fieldRequired.length; i++){
		var obj = formobj.elements[fieldRequired[i]];
		if (obj){
			switch(obj.type){
			case "select-one":
				if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].text == ""){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "select-multiple":
				if (obj.selectedIndex == -1){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "text":
			case "textarea":
				if (obj.value == "" || obj.value == null){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			default:
			}
			if (obj.type == undefined){
				var blnchecked = false;
				for (var j = 0; j < obj.length; j++){
					if (obj[j].checked){
						blnchecked = true;
					}
				}
				if (!blnchecked){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
			}
		}
	}

	if (alertMsg.length == l_Msg){
		return true;
	}else{
		alert(alertMsg);
		return false;
	}
}
// -->
</script>
<script type="text/javascript">

/***********************************************
* Email Validation script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

function checkmail(e){
var returnval=emailfilter.test(e.value)
if (returnval==false){
alert("Please enter a valid email address.")
e.select()
}
return returnval
}

</script>
<form  name = "formcheck" method="post" action="registernext.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return formCheck(this);" >

<h1>Create an account</h1>
<div id="leftsidebar">
<br /><br />
First Name:<br /><br />
Last Name :<br /><br />
Username:<br /><br /><br /><br />
Choose a Password:<br /><br />
Re-type Password:<br /><br />
Enter Email:<br /><br />
Select sex:<br /><br />
</div>
<div id="rightsidebar">
<br /><br /><br />
<input type="text" name="firstname" size="10" maxlength="30" /><br /><br />
<input type="text" name="lastname" size="10" maxlength="30" /><br /><br />
<input type="text" name="username" size="15" maxlength="30" /><br /><br />
<input type="submit" name="checkavailability" value="Check Availability" size="10" /><br /><br />
<input type="password" name="password" size="15" maxlength="30" /><br /><br />
<input type="password" name="password1" size="15" /><br /><br />
<input type="text" name="myemail" size="25" maxlength="35" /><br /><br />
<input type="radio" name="sex" value="male" /><script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>Male<br />
<input type="radio" name="sex" value="female" />Female<br /><br />
<img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<small>Can't read the image? click <a style="color:red;" href='javascript: refreshCaptcha();'>here</a> to refresh</small><br /><br/>
<input type="submit" name="createaccount" onClick="return checkmail(this.form.myemail)"  value="Create my account" size="10" /><br /><br />
</div>
</form>

</body>
</html>