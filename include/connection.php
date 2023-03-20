<?php

$db = mysqli_connect('localhost','root','','task');
if($db){
    //echo 'database connection established';
}
else{
    die('Databse connection lost'.mysqli_error($db));
}