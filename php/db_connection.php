////// connect with sql
<?php

$sname="localhost";
$username="root";
$password=" ";

$db_name="my_db";

$connection=mysqli_connect($sname,$username,$password,$db_name);
 
// if method 
if(!$connection){
    echo "Connection Failed";
}
?>