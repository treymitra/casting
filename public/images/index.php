<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<title>Welcome to ParkPlease</title>
<link href="styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function setTable(what, what2){
if(document.getElementById(what).style.display=="none"){
document.getElementById(what).style.display="block";
}
else if(document.getElementById(what).style.display=="block"){
document.getElementById(what).style.display="none";
}
if(document.getElementById(what2).style.display=="none"){
document.getElementById(what2).style.display="block";
}
else if(document.getElementById(what2).style.display=="block"){
document.getElementById(what2).style.display="none";
}
}
</script>

</head>
<body>
<!--CONTAINER STARTS-->
<div id="container">
  <!--HEADER/NAVIGATION STARTS-->
  <div id="top">
	<p>Coming Soon...</p>
  </div>
  <!--HEADER/NAVIGATION ENDS-->
  <!--WELCOME AREA STARTS-->
  <div id="welcome">
  
<p>Do you have a parking space that is not always in use? Rent it out for easy cash!</p>

<p>Are you exhausted by the stress of parking?
Park Please is here to make the headache of parking a thing of the past.</p>

<p>Discover new parking spots near your home or work and save money, time, and hassle.  <p>
<p> Interested? Get an invite!</p>
</div>
  <!--WELCOME AREA ENDS-->
  <!--SIDEBAR STARTS-->
  <div id="sidebar">

  </div>
  <!--SIDEBAR ENDS-->
  <!--CONTENT STARTS-->
  <div id="content">
	<form name="reg" action="put.php" method="post">
	<table style="background-image: url(images/signup.png);">
	<tr>
	<td>
	<label for="email" class="text-input">E-mail:<a class="req">*</a></label><br>
	<input class="validate[required,custom[email]] text-input" type="text" name="email" id="email" size="15" />
	</td>
	<td>
	<label for="phone" class= "text-input">Telephone:</label><br>
	<input class="validate[required,length[10,14],custom[telephone]] text-input" type="text" name="phone" id="phone" size="10" /><br />	
    </td>
    </tr>
    <tr>
	<td>
	<label for="fname" class="textinput">First Name:<a class="req">*</a></label><br>
	<input type="text" name="fname" id="fname" size="15"/>
	</td>
	<td>
	<label for="lname" class="textinput">Last Name:<a class="req">*</a></label><br>
	<input class= "validate[required] text-input" type="text" name="lname" id="lname" size="15"/><br />
	</td>
	</tr>
	<tr>
	<td>
	<input type="checkbox" name="spot" id="spot" value="yes" onClick="setTable('spot_t','spot_t2')"/> I want to rent my spot!     
	</td>
	<td align="right"><a class="req">*required</a>
	</td>
	</tr>
	<tr>
	<td colspan="2" height="60">
	<!-- of box is checked then these options avalible -->
	<table >
	<tr id="spot_t" style="display:none;">
	<td >
	<label for="address" class= "text-input">Address:</label><br>
	<input class="validate[required,length[10,14],custom[telephone]] text-input" type="text" name="address" id="address" />
    </td>
    <td >
    <label for="zip" class="textinput">Zipcode:<a class="req">*</a></label><br>
	<input class= "validate[required] text-input" type="text" name="zip" id="zip" size="5" />
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td>
	</td>
	<td>
	<input type="image" src="images/gobutton.png" name="image">	
	</td>
	</tr>
	</table>

</form>
  </div>
  <!--CONTENT ENDS-->
  <!--FOOTER STARTS-->
  <div id="footer">
  <table>
  <tr>
  <td width="70">
<a href="http://www.facebook.com/ParkPlease">
<img  src="images/facebook.png">
</a>
<a href="http://twitter.com/#!/prkplz">
<img  src="images/twitter.png">
</a>
</td>
<td>
<p>Like us on facebook for early beta info and to get invited to our launch party!</p>
</td>
</tr>
</table>
</div>
  <!--FOOTER ENDS-->
</div>
<!--CONTAINER ENDS-->
</body>
</html>
