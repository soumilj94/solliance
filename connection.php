<?php

//connection variables
$host="localhost:3306";
$user="root";
$password="";
$database="users";

//Database connection
$con = mysqli_connect($host,$user,$password,$database);

//checking for connection success
    if(!$con){
        die("Connection failed due to" . mysqli_connect_error());
    }


?>