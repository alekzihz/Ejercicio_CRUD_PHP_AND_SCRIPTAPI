<?php   
     require("./model/connectDB.php");
     require("./model/queries.php");
     $db = connectaDB();
    if(isset($_POST['submite']))
    {
       
        $filename= $_FILES["file"]["tmp_name"];
      
        $target_file = "uploads/" . basename($_FILES["file"]["name"]);

        // Verifica si el archivo es un archivo CSV válido
        $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if($fileType != "csv") {
            echo "Solo se permiten archivos CSV.";
            exit;
        }
     
        $fileData = fopen($filename, 'r');
        $row = 1;

        $Data= array();
        //ignore first row    
        fgetcsv($fileData);

        
        //read every row of the file
        while (!feof($fileData)) {
            $data[] = fgetcsv($fileData, null, ';');
        }

        for ($i = 0; $i < count($data); $i++) {
            
            if(is_array($data[$i])){
                $result = insertCsv($db, $data[$i]);
                if($result==true){
                    
                    //echo "Datos insertados correctamente";
                }
                else{
                    echo "Error al insertar los datos";
                }
            }
        }
        $db->close();  
        
        if($result==true){
            echo "Datos insertados correctamente";
            //die;
            header("Location: ./viewList");
            exit;
        }
     
    }
    else{
        header("Location: ./main");
    }

?>