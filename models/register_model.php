<?php

class CHAT {

    
// gaching password
public function hach_password($password)
    {
        $hach = sha1($password);
        return $hach;
    }


// insert in data base
public function insert($sql)
    {   
        global $db;
        //echo"<br> hello ";
        $result = mysqli_query($this->db,$sql);
        // echo"<br> hello ";
        if (!$result) {
            echo mysqli_error($this->db);
        }else { 
            echo"NADIIII";        
            header("Location:..\VIEW\login.php");
        }
    }

public function select($sql,$email,$new_password){    
    $result = mysqli_query($this->conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if ($email === $row['email'] && $new_password === $row['password'] ){
        return $row;
    }else {          
        echo "ERROR : " . mysqli_error($this->conn);
    }
}

}







?>