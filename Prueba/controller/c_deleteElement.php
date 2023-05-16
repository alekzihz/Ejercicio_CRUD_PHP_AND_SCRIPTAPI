<?php
     require("./model/connectDB.php");
     require("./model/queries.php");
     $db = connectaDB();

     //if($_POST['action'])
    //{

        $result= deleteElement($db, $id);

        if($result)
        {
            header("Location: ./../../viewList");
        }
        else
        {
            echo "Error deleting element";
        }
  // }
?>