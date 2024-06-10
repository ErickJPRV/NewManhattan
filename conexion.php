<?php
function connection() {
    $host = 'localhost';
    $user = "root";
    $pass = "";
    $bd = "NewManhattan";
    $connect = mysqli_connect($host, $user, $pass, $bd);
    return $connect;
}
?>;