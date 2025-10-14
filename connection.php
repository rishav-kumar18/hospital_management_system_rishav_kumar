<?php

$server="localhost";//servername
$user="root";//username
$password="";//password 
$data="database";//database name

$con =new mysqli($server,$user,$password,$data);//connecting database
if($con->connect_error)//checking connection
{
   echo "connection not successfull";
}
else
echo "connection successful";


?>