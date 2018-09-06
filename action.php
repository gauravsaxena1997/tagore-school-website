<?php

mysql_connect("localhost","root","");

mysql_select_db("school");
$userid=$_REQUEST['userid'];
$pass=$_REQUEST['pass'];
$name=$_REQUEST['name'];
$fname=$_REQUEST['fathername'];
$dob=$_REQUEST['dob'];
$add=$_REQUEST['address'];
$mob=$_REQUEST['mobile'];
$citys=$_REQUEST['city'];
$country=$_country['country'];
$ema=$_REQUEST['email'];
$sex=$_REQUEST['gender'];
$language=$_country['lan'];

$sql="insert into registration(`userid`,`password`,`name`,`fathername`,`dob`,`address`,`mobno`,`city`,`country`,`e_mail`,`sex`,`language`)values('".$userid."','".$pass."','".$name."','".$fname."','".$dob."','".$add."','".$mob."','".$citys."','".$country."','".$ema."','".$sex."','".$languages."')";
if(mysql_query($sql))
{
	echo "success";
}
else
{
	echo mysql_error();
}
?>