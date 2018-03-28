<?php

mysql_connect("localhost","root"."");

mysql_select_db("kanoria");

$name=$_REQUEST['name'];
$password=$_REQUEST['password'];

$sql="insert into student(`name`,`password`)values('".$name."','".$password."')";

if(mysql_query($sql))
{
	echo "success";
}
else
{
	echo mysql_error();
}
?>