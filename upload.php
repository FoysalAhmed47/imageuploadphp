<?php
require "init.php";
if($con)
{
$name = $_POST['name'];
//$email = $_POST['email'];
$image = $_POST['image'];


$upload_path = "uploads/$name.jpg";

$sql = "insert into imageinfo(name,path) values('$name','$upload_path');";

if(mysqli_query($con,$sql))
{
file_put_contents($upload_path,base64_decode($image));
echo json_encode(array('response'=>"image uploaded successfully..."));
}
else
{
echo json_encode(array('response'=>"image upload failed..."));
}
mysqli_close($con);
}
?>
