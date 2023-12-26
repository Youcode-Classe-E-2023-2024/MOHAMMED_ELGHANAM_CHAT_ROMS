<?php
session_start();
session_destroy();
header("Location:../VIEW/login.php");
?>