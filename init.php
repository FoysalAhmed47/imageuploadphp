<?php
$host_name= "localhost";
$user_name = "foysal";
$user_password = "123456";
$db_name = "imagedb";

$con = mysqli_connect($host_name,$user_name,$user_password,$db_name);

if($con)
{
echo "Connection success...";
}
else
{
echo "Connection Failed...";
}

?>