<?php
//find values based on their sql(value of one singel field)
function findval($columname,$tablename,$wherecolumn,$wherevalue){
    global $db;
    $sql = "SELECT $columname FROM $tablename where $wherecolumn='$wherevalue'";
    $row1 = mysqli_fetch_assoc(mysqli_query($db,$sql));
    $value = $row1[$columname];
    return $value;
}