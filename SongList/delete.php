<?php 

include_once("connection/connection.php");
$conn = connection();


    
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM song_list WHERE id = '$id'";
    $conn->query($sql) or die ($conn->error);
    
    echo header("location: index.php");
    ?>
