<?php
include("config.php");
$un = mysqli_real_escape_string($_SERVER['REDIRECT_URL']);
$un = explode("/", $un);
$un = end($un);
$un = substr($un, 0, 10);
$qry = mysqli_query("SELECT * FROM members WHERE UserName='$un' LIMIT 1") or die(mysqli_error());
if(mysqli_num_rows($qry)!=1) {
  die('<script> alert("Página não encontrada.");
location.href="lol.php";
</script>');
} else {
  while($row = mysqli_fetch_array($qry)) {
    echo '<script> location.href="member-index.php?id='.$row['member_id'].'"; </script>';
  }
}
?>