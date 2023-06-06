<?php
function connection(){
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'songdb';

    $conn = new mysqli($host,$username,$password,$dbname);

    if($conn->connect_error){
        echo $conn->connect_error;
    }
    else{
        return $conn;
    }
}
?>