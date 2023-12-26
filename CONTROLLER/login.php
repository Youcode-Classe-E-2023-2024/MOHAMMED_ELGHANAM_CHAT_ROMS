<?php
    session_start();
if (isset($_POST['send'])){
    include '..\MODEL\login.php';
    $db = new CHAT();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_password = $db->hach_password($password);
    $sql = "SELECT * FROM signup WHERE email='$email'";
    $user = $db->select($sql,$email,$new_password);
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    // echo "<pre>";
    // print_r($user);
    // echo "<pre>";
     
    header("location: ../VIEW/chat.php");
    exit();  



}

