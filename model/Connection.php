<?php
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	$hostname The hostname of your database server.
|	$username The username used to connect to the database
|	$password The password used to connect to the database
|	$database The name of the database you want to connect to
*/

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mydb';

//connect to database
$cn = mysqli_connect($hostname,$username,$password,$database);

    //if($cn->connect_error){

        //echo"can not to connect";
    //}
    //else{

       // echo"connect successful";
    //}
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

