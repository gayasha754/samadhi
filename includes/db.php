<!-- php

$Con = mysqli_connect("localhost", "root", "", "samadhi","3306");

?> -->

<?php 

$servername="localhost";
$username="root";
$pw="";
$databse="samadhi";

//connect to db
$Con = new mysqli($servername,$username,$pw,$databse);
//if db not connected
if($Con->connect_error){
    die("Connection Faild".$Con->connect_error);
}

?>