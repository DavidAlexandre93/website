<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="demo.css" />

<style type="text/css">
<!--
body {
	background-image: url(img/footer.jpg);
	background-color:#3897cf;
	background-repeat: repeat-x;
	background-position:bottom;
}
-->
</style>
</head>

<body>
<div id="div-regForm">

<div class="form-title">
  <p>&nbsp;</p>
  <p>Sent Message </p>
</div>
<div class="form-sub-title">
  <p>the leading.........................?</p>
  <p>&nbsp;</p>
</div>

<form id="regForm" action="sent.php" method="post">

<table width="332" align="center">
  <tbody>
  <tr>
    <td width="35" valign="top"><label for="fname">From</label></td>
    <td width="285"><div class="input-container">
	<?php
	   if (isset($_GET['id']))
	{
include("config.php");
			$member_id = $_GET['id'];
			$result = mysqli_query("SELECT * FROM messages WHERE message_id = $member_id");
			
			while($row = mysqli_fetch_array($result))
			  {
        echo'<input type="text" name="wala" value="'. $row['sender'] .'">'; 
		 }
			
			mysqli_close($con);
			}
			?>
	
	</div></td>
  </tr>
  <tr>
    <td valign="top"><label for="lname">to</label></td>
    <td><div class="input-container">
      <p>
        <input name="sender" id="sender" type="text" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
      </p>
      <p>&nbsp;  </p>
    </div></td>
  </tr>
 
 <tr>
    <td valign="top"><label for="lname">Content<br />
    </label></td>
    <td><div class="input-container">
      <p>&nbsp;        </p>
      <p>
	  <?php
	   if (isset($_GET['id']))
	{
include("config.php");
			$member_id = $_GET['id'];
			$result = mysqli_query("SELECT * FROM messages WHERE message_id = $member_id");
			
			while($row = mysqli_fetch_array($result))
			  {
        echo '<textarea name="content" cols="40" rows="10" id="content">';
		echo $row['content'];
		echo '</textarea>';
		}
			
			mysqli_close($con);
			}
			?>
      </p>
      <p>
        <label>
        <input name="status" type="hidden" id="status" value="pending"/>
        </label>      
          </p>
    </div></td>
  </tr>
    </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" class="greenButton" value="Sent" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
  <?php
	   if (isset($_GET['id']))
	{
include("config.php");
			$member_id = $_GET['id'];
			$result1 = mysqli_query("UPDATE messages SET status='read' WHERE message_id = $member_id");
			$result = mysqli_query("SELECT * FROM messages WHERE message_id = $member_id");
			
			while($row = mysqli_fetch_array($result))
			  {
       echo '<a href=replymessages.php?id=' . $row["message_id"] . '>' . '<input type="submit" class="greenButton" value="Reply" />' . '</a>';
		 }
			
			mysqli_close($con);
			}
			?>
 
  </td>
  </tr>
  </tbody>
</table>

</form>


</div>



</body>
</html>
