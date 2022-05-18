<?php

$host="localhost";
$user="root";
$db="hyosung";

$conn = mysqli_connect($host, $user);
$db_conn = mysqli_select_db($conn,$db);
// echo $db_conn;

if($db_conn){
    echo 'db 접속 성공<br>';
}else{
    echo 'db 접속 실패<br>';
}

?>