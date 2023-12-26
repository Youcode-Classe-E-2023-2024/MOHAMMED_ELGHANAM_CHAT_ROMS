<?php
session_start();
include '..\MODEL\login.php';
$db = new CHAT();
if (isset($_POST['send'])){
    $creator = $_SESSION['user_id'];
    $name_room = $_POST['name_room'];
    $sql = "INSERT INTO room (name_room, creator)
    VALUES ('$name_room', '$creator')";
    $db->insert($sql);



}




?>