<?php
function connect_db(){
    $host="localhost";
    $username="root";
    $password="";
    $dbname="my_db";
    $conn=mysqli_connect($host,$username,$password,$dbname);
    if(!$conn){
        die("Kết nối CSDL thất bại: ".mysqli_connect_error());
    }
    return $conn;
}
?>