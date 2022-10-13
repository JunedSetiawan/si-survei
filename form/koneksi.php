<?php

$host="localhost";
$user="root";
$password="";
$db="db_form";

$kon = mysqli_connect($host,$user,$password);


$hasil=mysqli_select_db($kon,$db);



?>