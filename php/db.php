<?php

$servername="localhost";
$username="root";
$password="";
$dbname="registerUser";

$conn = mysqli_connect($_server,$username,$password,$dbname);

if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
}  else {
   "Успех";
} ?>