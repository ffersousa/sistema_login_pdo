<?php include("../database/mysqli.php");

function queryData($query)
{
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    return $result;
}






?>