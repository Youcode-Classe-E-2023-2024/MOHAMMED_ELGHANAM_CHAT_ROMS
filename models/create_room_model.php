<?php
class create_room{

    public function insert($sql)
    {   
        global $db;
        //echo"<br> hello ";
        $result = mysqli_query($db,$sql);
        // echo"<br> hello ";
        if (!$result) {
            echo mysqli_error($db);
        }else { 
            echo"NADI";        
            header("Location:index.php?page=chat");
        }
    }


}