<?php
session_start();
include '..\MODEL\create_room.php';
$db = new create_room();
if (isset($_POST['send'])){
    $creator = $_SESSION['user_id'];
    // print_r($creator);
    $name_room = $_POST['name_room'];
    $sql = "INSERT INTO room (name_room, creator)
    VALUES ('$name_room', '$creator')";
    $db->insert($sql);



}




?>