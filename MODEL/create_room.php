<?php
include 'config.php';
class create_room extends config{

    public function insert($sql)
    {   
        //echo"<br> hello ";
        $result = mysqli_query($this->conn,$sql);
        // echo"<br> hello ";
        if (!$result) {
            echo mysqli_error($this->conn);
        }else { 
            echo"NADI";        
            header("Location:..\VIEW\chat.php");
        }
    }


}