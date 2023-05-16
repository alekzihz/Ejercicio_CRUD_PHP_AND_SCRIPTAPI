<?php

function insertCsv($db, $data){

    $query = $db->prepare("INSERT INTO Resultados (name, model, manufacturer, cost_in_credits, length, max_atmosphering_speed, crew, passengers, cargo_capacity, consumables, hyperdrive_rating, MGLT, starship_class, created, edited, url) 
    VALUES (:name, :model, :manufacturer, :cost_in_credits, :length, :max_atmosphering_speed, :crew, :passengers, :cargo_capacity, :consumables, :hyperdrive_rating, :MGLT, :starship_class, :created, :edited, :url)");
    
    $query->bindValue(':name', $data[0]);
    $query->bindValue(':model', $data[1]);
    $query->bindValue(':manufacturer', $data[2]);
    $query->bindValue(':cost_in_credits', $data[3], SQLITE3_INTEGER);
    $query->bindValue(':length', $data[4], SQLITE3_INTEGER);
    $query->bindValue(':max_atmosphering_speed', $data[5]);
    $query->bindValue(':crew', $data[6]);
    $query->bindValue(':passengers', $data[7]);
    $query->bindValue(':cargo_capacity', $data[8], SQLITE3_INTEGER);
    $query->bindValue(':consumables', $data[9]);
    $query->bindValue(':hyperdrive_rating', $data[10], SQLITE3_FLOAT);
    $query->bindValue(':MGLT', $data[11], SQLITE3_INTEGER);
    $query->bindValue(':starship_class', $data[12]);
    $query->bindValue(':created', $data[13]);
    $query->bindValue(':edited', $data[14]);
    $query->bindValue(':url', $data[15]);
    
    $result = $query->execute();
    if($result==true){
        return true;
    }
    else{
        return false;
    }
}


function getData($db){
    $query = $db->prepare("SELECT * FROM Resultados");
    $result = $query->execute();
    $DataCsv = array();
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $DataCsv[] = $row;
    }
    return $DataCsv;
}

function getElementById($db, $id){
    $query = $db->prepare("SELECT * FROM Resultados WHERE id=:id");
    $query->bindValue(':id', $id, SQLITE3_INTEGER);
    $result = $query->execute();
    $DataCsv = array();
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $DataCsv[] = $row;
    }
    return $DataCsv;
}

function deleteElement($db, $id){
    $query = $db->prepare("DELETE FROM Resultados WHERE id=:id");
    $query->bindValue(':id', $id, SQLITE3_INTEGER);
    $result = $query->execute();
    if($result==true){
        return true;
    }
    else{
        return false;
    }
}

function addElements($db, $name, $model, $manufacturer, $cost_in_credits, $length, $max_atmosphering_speed, $crew, $passengers, $cargo_capacity, $consumables, $hyperdrive_rating, $MGLT, $starship_class, $created, $edited, $url){
    $query = $db->prepare("INSERT INTO Resultados (name, model, manufacturer, cost_in_credits, length, max_atmosphering_speed, crew, passengers, cargo_capacity, consumables, hyperdrive_rating, MGLT, starship_class, created, edited, url) 
    VALUES (:name, :model, :manufacturer, :cost_in_credits, :length, :max_atmosphering_speed, :crew, :passengers, :cargo_capacity, :consumables, :hyperdrive_rating, :MGLT, :starship_class, :created, :edited, :url)");
    
    $query->bindValue(':name', $name);
    $query->bindValue(':model', $model);
    $query->bindValue(':manufacturer', $manufacturer);
    $query->bindValue(':cost_in_credits', $cost_in_credits, SQLITE3_INTEGER);
    $query->bindValue(':length', $length, SQLITE3_INTEGER);
    $query->bindValue(':max_atmosphering_speed', $max_atmosphering_speed);
    $query->bindValue(':crew', $crew);
    $query->bindValue(':passengers', $passengers);
    $query->bindValue(':cargo_capacity', $cargo_capacity, SQLITE3_INTEGER);
    $query->bindValue(':consumables', $consumables);
    $query->bindValue(':hyperdrive_rating', $hyperdrive_rating, SQLITE3_FLOAT);
    $query->bindValue(':MGLT', $MGLT, SQLITE3_INTEGER);
    $query->bindValue(':starship_class', $starship_class);
    $query->bindValue(':created', $created);
    $query->bindValue(':edited', $edited);
    $query->bindValue(':url', $url);
    
    $result = $query->execute();
    if($result==true){
        return true;
    }
    else{
        return false;
    }
}


?>