<?php
	$link = mysql_connect('50.63.233.42', 'parkplease', 'k8hgf6ULCyM3hq');
	if (!$link)
		{
		die('Could not connect to database - please try again later ' . mysql_error());
		}

	//echo $_POST['email'].'<br />';
	$em=$_POST['email'];
	echo $em.'<br />';

	mysql_select_db("parkplease", $link);

	$result = mysql_query("SELECT email FROM signup_list WHERE email = '" .$em. "'");

	$row = mysql_fetch_array($result);

	//echo $row['email'].'<br />';
	if ($row['email']==$em)
	{ 
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=emailused.html">';	
	}
	else
	{
		$sql="INSERT INTO signup_list
		(
		email,
		p_number,
		f_name,
		l_name,
		address,
		zip,
		spot
		)

		VALUES
		(
		'$_POST[email]',
		'$_POST[phone]',
		'$_POST[fname]',
		'$_POST[lname]',
		'$_POST[address]',
		'$_POST[zip]',
		'$_POST[spot]')";
	
		if (!mysql_query($sql,$link))
			{
			echo $sql;
			die('Error: ' . mysql_error());
			}
		else
			{
				//echo "Thank you for signing up for an invite.";
			}
	}

mysql_close($link);
?>
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
<div class="image">
  <img alt="" src="images/signup.png" />
  <div class="text">
  <!--HEADER/NAVIGATION STARTS-->
  <div id="top">
  </div>
  <!--HEADER/NAVIGATION ENDS-->
  <!--WELCOME AREA STARTS-->
  <div id="welcome">

</div>
  <!--WELCOME AREA ENDS-->
  <!--SIDEBAR STARTS-->
  <div id="sidebar">

  </div>
  <!--SIDEBAR ENDS-->
  <!--CONTENT STARTS-->
  <div id="content2">

<p class="">
Thank you for signing up for ParkPlease!</br>
</br>
You'll be the first to know when we go live!</br>
</br>
We understand that parking sucks. It's stressful, uncertain, and expensive. But it doesn't have to be that way. We're going to make it easier to find affordable parking where you live, where you work, and where you hang out. Rent out your unused parking space for extra cash or take advantage of low priced ParkPlease spots all around the city. It's up to you!</br>
</br>
</br>
</br>

We plan on celebrating a world of better parking soon. Join us on facebook and twitter and we'll bring you to the party!</br>
</br>
See you soon, </br>
</br>
The ParkPlease team :)</br>
</br>
If you have any questions please contact Charlie@ParkPlease.com</p>
  </div>
  <!--CONTENT ENDS-->
  <!--FOOTER STARTS-->
  <div id="footeryes">
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
</div>
</div>
  <!--FOOTER ENDS-->
</div>
<!--CONTAINER ENDS-->
</body>
</html>
