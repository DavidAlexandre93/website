<?php
require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="">
	<meta name="description" content="">
<title><?php echo $_SESSION['SESS_FIRST_NAME'];?> Profile</title>
<link type='text/css' href='css1/demo.css' rel='stylesheet' media='screen' />
<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<link href="format.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
.style2 {font-size: 12px}
-->
</style>

<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
<script language="javascript" type="text/javascript">
function showHide(shID) {
	if (document.getElementById(shID)) {
		if (document.getElementById(shID+'-show').style.display != 'none') {
			document.getElementById(shID+'-show').style.display = 'none';
			document.getElementById(shID).style.display = 'block';
		}
		else {
			document.getElementById(shID+'-show').style.display = 'inline';
			document.getElementById(shID).style.display = 'none';
		}
	}
}
</script>
<style type="text/css">
	/* This CSS is just for presentational purposes. */
	
	#wrap {
		font: 1.3em/1.3 Arial, Helvetica, sans-serif;
		width: 30em;
		margin: 0 auto;
		padding: 1em;
		background-color: #fff; }
	h1 {
		font-size: 200%; }

	/* This CSS is used for the Show/Hide functionality. */
	.more {
		display: none;
		border-top: 1px solid #666;
		border-bottom: 1px solid #666; }
	a.showLink, a.hideLink {
		text-decoration: none;
		color: #36f;
		padding-left: 8px;
		background: transparent url(down.gif) no-repeat left; }
	a.hideLink {
		background: transparent url(up.gif) no-repeat left; }
	a.showLink:hover, a.hideLink:hover {
		border-bottom: 1px dotted #36f; }
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:hover {
	color: #0033FF;
	text-decoration: underline;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body>
<div class="main1">

<div class="lefttop">

  <div class="lefttopleft"><img src="images/logo.jpg" width="94" height="21" /></div>
  
  <div class="lefttoright">
  <a href="request1.php"><img src="images/Untitled-1.png" width="15" height="15" border="0" /></a>
  <?php
include("config.php");

$result = mysqli_query("SELECT * FROM friendlist WHERE firstname='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY firstname ASC");
	
	$numberOfRows = MYSQLI_NUMROWS($result);	
	
	echo '<font size="2" color="red"><b>' . $numberOfRows . '</b></font>'; 
	?>
		
		<a href="messages.php"><img src="images/messages.png" width="15" height="15" border="0" /></a>
		<?php
include("config.php");

$result = mysqli_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY receiver ASC");
	
	$numberOfRows = MYSQLI_NUMROWS($result);	
	echo '<font size="2" color="red"><b>' . $numberOfRows. '</b></font>';
	?>
  </div>
</div>
	
	
	
  <div class="righttop">
  <div class="search">
   <form action="friends.php" method="GET"> 
	<input name="query" type="text" maxlength="30" class="textfield" />
  </form></div>
  
    <div class="nav"><ul id="sddm">
	
	<li><a href="lol.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">Home</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">		  </div>
	</li>
	<li><a href="profile.php" onmouseover="mopen('m4')" onmouseout="mclosetime()">Profile</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">		  </div>
	</li>
	<li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Account</a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="profile.php">	
		<?php
include("config.php");

$result = mysqli_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");

echo "<br />";
while($row = mysqli_fetch_array($result))
  {

  echo "<img width=70 height=90 alt='Unable to View' src='" . $row["profImage"] . "'>";
  echo '<br />';
  echo $_SESSION['SESS_FIRST_NAME']." ". $row["LastName"] ;
 
  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

mysqli_close($con);
?></a>
		<a href="editfriends.php">Edit Friend</a>
		<a href="#">Account Setting</a>	
		<a href="auto.htm">SearchFriend</a>
		<a href="index.php">Logout</a>		  </div>
	</li>
</ul>
<div style="clear:both"></div>

<div style="clear:both"></div></div>
  </div>
  <div class="left">
    <div class="propic">
	<?php
include("config.php");
$id= $_SESSION['SESS_MEMBER_ID'];

$image=mysqli_query("SELECT * FROM members WHERE member_id='$id'");
			$row=mysqli_fetch_assoc($image);
			$_SESSION['imageko']= $row['profImage'];
			echo '<div id="pic">';
			echo "<img width=106 height=140 alt='Unable to View' src='" . $_SESSION['imageko'] . "'>";
			echo '</div>';
mysqli_close($con);
?>
	</div>
	
	
    <div class="link style1">
	
	<ul id="sddm1">
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()"><img src="images/wal.png" width="17" height="17" border="0" /> &nbsp;<font color="#0000FF">Wall</font></a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="INFO.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/message.png" width="16" height="12" border="0" /> &nbsp;Info</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="photolist.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/photos.png" width="16" height="14" border="0" /> &nbsp;Photos (<?php
include("config.php");

$result = mysqli_query("SELECT * FROM photos WHERE uploadedby='".$_SESSION['SESS_FIRST_NAME'] ."'");
	
	$numberOfRows = MYSQLI_NUMROWS($result);	
	
	echo '<font size="1" color="blue"><b>' . $numberOfRows . '</b></font>'; 
	?>)	
	</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="friends.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/friends.png" width="18" height="15" border="0" /> Friends
	(<?php
include("config.php");

$result = mysqli_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted' ORDER BY addby ASC");
	
	$numberOfRows = MYSQLI_NUMROWS($result);	
	echo '<font size="1" color="blue"><b>' . $numberOfRows. '</b></font>';
	?>)
	
	
	</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li>
</ul>
<div style="clear:both"></div>

<div style="clear:both"></div>
	
	
	</div>
	
    <div class="friends">
	<strong><div align="center"></div>
	</strong>
	<div align="center"><div id='basic-modal'><a class='basic' href="#" style="text-decoration:none;">View all Friend</a></div>
	
	<div id="basic-modal-content">
	
					<?php
include("config.php");
				
				$result = mysqli_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted'");
				echo $_SESSION['SESS_FIRST_NAME'];
				echo '>';
				echo 'Friends';
				echo "<br />";
				while($row = mysqli_fetch_array($result))
				  {
				  echo '<table width="125" height="50" border="0" cellspacing="0" cellpadding="0" align="center">';
				  echo '<tr>';
				  echo '<td width="50px" colspan="0" rowspan="3" align="left" valign="top">';
				  echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
				  echo '</td>';
				  echo '<td height="16">&nbsp;</td>';
				  echo '</tr>';
				  echo '<tr>';
				  echo '<td height="17">';
				  echo '<div align="left" valign="center">';
				  echo '&nbsp;&nbsp;';
				  echo '<a href=friendsprofile1.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a>';
				  echo '</div>';
				  echo '</td>';
				  echo '</tr>';
				  echo '<tr>';
				  echo '<td height="16">&nbsp;</td>';
				  echo ' </tr>';
				  echo '</table>';
				  echo '<br>';
						//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
						//echo '<a href=member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
						
				  }
				
				mysql_close($con);
				?>
	
	</div>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
		<!--end of popup-->
	
	
	    <?php
include("config.php");

$result = mysqli_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."'  and status='accepted' ORDER BY RAND() LIMIT 4");

echo "<br />";
while($row = mysqli_fetch_array($result))
  {
  echo '<table width="125" height="50" border="0" cellspacing="0" cellpadding="0" align="center">';
  echo '<tr>';
  echo '<td width="50px" colspan="0" rowspan="3" align="left" valign="top">';
  echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  echo '</td>';
  echo '<td height="16">&nbsp;</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td height="17">';
  echo '<div align="left">';
  echo '&nbsp;&nbsp;';
  echo '<a href=friendsprofile1.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a>';
  echo '</div>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td height="16">&nbsp;</td>';
  echo ' </tr>';
  echo '</table>';
  echo '<br>';
  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

mysqli_close($con);
?>
 
	  
	  </div>
    </div>
  </div>
	
	
	
  <div class="right">
    <div class="rightleft">
	  <div class="name"><strong><?php
include("config.php");

$result = mysqli_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");

while($row = mysqli_fetch_array($result))
  {
  
  echo "<p><h3>".$row['FirstName']." ".$row['LastName']."</h3>"."</p>";

  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

mysqli_close($con);
?></strong></div>





<div class="information">


<?php
include("config.php");

$result = mysqli_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");

while($row = mysqli_fetch_array($result))
  {
  
  echo "Live in: "."<b>".$row['Address']."</b>"."    |    "."Born on : "."<b>".$row['Birthdate']."</b>"."    |    " ."Gender : "."<b>".$row['Gender']."</b>"; 
		
  }

mysqli_close($con);
?>



 </div>






	  
	  <div class="shoutout">
	  <form  name="form1" method="post" action="save3.php">
         <div class="comment"><textarea name="message" cols="45" rows="2" id="message" onclick="this.value='';">What's on your mind.................</textarea>
         </div>
		 <input name="name" type="hidden" id="name" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		 <input name="poster" type="hidden" id="name" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		 <input name="name1" type="hidden" id="name" value="<?php echo $_SESSION['SESS_LAST_NAME'];?>"/>
          <div class="button"><input type="submit" name="btnlog" value="Share" class="greenButton" /></div>
    </form>
	  
	  </div>
	  
	  <div class="post">
	  <?php
include("config.php");

$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message WHERE poster='".$_SESSION['SESS_FIRST_NAME'] ."'ORDER BY messages_id DESC";
$result = mysqli_query($query);


			
			
			

while($row = mysqli_fetch_assoc($result))
{
    //echo "POST by " . $_SESSION['SESS_FIRST_NAME'] . ": {$row['messages']} <br><br>";
	//echo '<input type="text" name="firstname" value="'. $row['messages_id'] .'">'; 
	echo '<div class="pic1">';
	echo "<img width=50 height=50 alt='Unable to View' src='" . $row["picture"] . "'>";
	echo '</div>';
	echo '<div class="message">';
	echo "Posted by {$row['user']}:<br></div><b><div class='postedby'>{$row['messages']}</b>";
	echo '<form action="like.php" method="post">'; 
	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="cam" value="'. $_SESSION['SESS_FIRST_NAME'] .'">';
	echo '<input type="submit" Value="like">';
	echo '</form>';
	$result1 = mysqli_query("SELECT * FROM bleh WHERE remarks='". $row['messages_id'] ."'");


if($row2 = mysqli_fetch_array($result1))
  {
  $numberOfRows = MYSQLI_NUMROWS($result1);	
  $numberoflikes=$numberOfRows;
  $numberoflikes1=$numberOfRows-1;
  if  (($row2['remarksby'])==($_SESSION['SESS_FIRST_NAME']) && ($numberoflikes1 > 0))
  {
  
  echo '<font color="blue"><b>' . 'You' . ' ' . '&' . ' ' . $numberoflikes1 . '</b></font>' . ' ' . 'People like this';
  }
  elseif (($row2['remarksby'])==($_SESSION['SESS_FIRST_NAME'])&& ($numberoflikes1 == 0))
  {
  echo '<font color="blue"><b>' . 'You' . '</b></font>' . ' ' . 'like this';
  }
  elseif ($numberoflikes > 0)
  {
  echo '<font color="blue"><b>' . $numberoflikes .'</b></font>' . 'people'  . 'like this';
  }
  
  }
	echo '<div class="delete">';
	echo '<font color="White">';
	echo '<a href=deletepost.php?id=' . $row["messages_id"] . '>' . "DELETE" . '</a>';

	echo '</font>';	
	echo '&nbsp;';
	echo '</div>';
	echo '<font color="blue">';
	echo '<br>';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
			
			echo '</font>';	
			/*echo '<form action="like.php" method="post">';
			echo '<input type="submit" name="addfriend" value="Like">';
			
			echo '</form';*/
	echo '</div>';
	 //echo "Comment:". '<input type="text" name="comment" class="textfield">';
	 //echo '<input type="submit" name="addfriend" value="addfriend">';
	//echo "____________________________________________________________________________________<br>";
	//echo '</div>';
	
	
	
	echo '<br /><br />';
	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE id=" . $row['messages_id'] . " ORDER BY comment_id DESC LIMIT 4";
	$result1 = mysqli_query($query1);
	while($row1 = mysqli_fetch_assoc($result1))
	{
		echo '<div class="postcomment">';
		echo "<img width=30 height=30 alt='Unable to View' src='" . $row1['pic'] . "'>";
		echo '<div class="commentby">';
		echo '<font color="blue">';
		echo $row1['commentedby'];
		echo '</font>';
		echo '&nbsp;&nbsp;';
		echo $row1['content'];
		echo '<div class="delete">';
	echo '<font color="White">';
	echo '<a href=deletepostcommentpro.php?id=' . $row1["comment_id"] . '>' . "DELETE" . '</a>';
	echo '</font>';	
	echo '&nbsp;';
	echo '</div>';
		echo '<br />';
		echo '<font color="blue">';
						$days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)
							echo date('F d Y', $row1['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
		echo '</font>';				
	echo '</div>';
		echo '</div>';
			echo '<br />';
	}
	echo '<div class="fieldcomment">';
	echo '<form action="commentpostprof.php" method="post">'; 
	echo '<input type="hidden" name="postid" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="user" value="'. $_SESSION['SESS_FIRST_NAME'] .'">';
	echo '<input type="hidden" name="pic" value="'. $_SESSION['SESS_LAST_NAME'] .'">';
	echo '<input type="text" class="textbox" name="postcomment">';
	echo '</form';
	echo '</div>';
} 

if (!mysqli_query($query,$con))
  {
  die('Error: ' . mysqli_error());
  }

mysqli_close($con)
?>
	  
	  </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <div class="rightright">
	
	
	  <div class="rightright1">Sponsor &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<a href="ads.php">&nbsp;create ads </a></div>
	  <div class="rightright2">
	  <?php
include("config.php");

		$result = mysqli_query("SELECT * FROM ads");
		while($row = mysqli_fetch_array($result))
  		{
	  
	    echo '<table width="214" border="0" cellspacing="0" cellpadding="0">';
          echo '<tr>';
            echo '<th colspan="2" scope="col">';
			echo '<div align="left">';
			echo $row['ads_title'];
			echo '</div>';
			echo '</th>';
          echo '</tr>';
          echo '<tr>';
            echo '<td width="50" valign="top">';
			echo "<img width=50 height=50 alt='Unable to View' src='" . $row["ads_pic"] . "'>";
			echo '</td>';
            echo '<td width="138" valign="top">';
			echo '<div align="left">';
			echo $row['ads_content'];
			echo '</div>';
			echo '</td>';
          echo '</tr>';
        echo '</table>';
		}

		mysqli_close($con);
		?>
	  </div>
	</div>
	
  </div>
</div>
</body>
</html>
