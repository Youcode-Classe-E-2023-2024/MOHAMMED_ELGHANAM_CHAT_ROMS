<?php
include 'config.php';
class CHAT extends config{


// gaching password
public function hach_password($password)
    {
        $hach = sha1($password);
        return $hach;
    }


// insert in data base
public function insert($sql)
    {   
           //echo"<br> hello ";
        
        $result = mysqli_query($this->conn,$sql);

        // echo"<br> hello ";
        if (!$result) {
            echo mysqli_error($this->conn);
        }else { 
            echo"error";        
            header("Location:..\VIEW\login.php");
        }
    }



}




?>