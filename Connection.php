<?php
$con = mysqli_connect('localhost','root');
if($con)
{
echo "connection succes";
}
  mysqli_select_db($con,'project');
?>