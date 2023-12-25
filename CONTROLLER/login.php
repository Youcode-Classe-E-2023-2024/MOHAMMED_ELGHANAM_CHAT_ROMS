<?php
session_start();
include '..\MODEL\login.php';
$db = new CHAT();

if (isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['name'] = $name;   
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;   

    $haching_pass = $db->hach_password($password);

    $sql="INSERT INTO signup (name, email, password)
    VALUES ('$name', '$email', '$haching_pass')";
    $db->insert($sql);
    

}




?>