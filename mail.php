<?php
session_start();
$name=test($_POST["name"]);
$email=test($_POST["email"]);
$mobile=test($_POST["mobile"]);
$address=$_POST["address"];
$size=$_POST["size"];
$mailto="weatyourservice97@gmail.com";
$from="do_not_reply@therack.com";
function test($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
$message="Name: ".$name." Email: ".$email." Mobile Number: ".$mobile." Address: ".$address." Size: ".$size." Order: ".$_SESSION["order"];
mail($mailto,"Order",$message,$from);
mail("helloak.1998@gmail.com","Order",$message,$from);
header("location:thanks.html");
?>