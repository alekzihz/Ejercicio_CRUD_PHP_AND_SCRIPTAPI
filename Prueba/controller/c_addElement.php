<?php

    require("./model/connectDB.php");
    require("./model/queries.php");
    $db = connectaDB();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $model = $_POST['model'];
        $manufacturer = $_POST['manufacturer'];
        $cost_in_credits = $_POST['cost_in_credits'];
        $length = $_POST['length'];
        $max_atmosphering_speed = $_POST['max_atmosphering_speed'];
        $crew = $_POST['crew'];
        $passengers = $_POST['passengers'];
        $cargo_capacity = $_POST['cargo_capacity'];
        $consumables = $_POST['consumables'];
        $hyperdrive_rating = $_POST['hyperdrive_rating'];
        $MGLT = $_POST['MGLT'];
        $starship_class = $_POST['starship_class'];
        $created = $_POST['created'];
        $edited = $_POST['edited'];
        $url = $_POST['url'];


        $result = addElements($db, $name, $model, $manufacturer, $cost_in_credits, $length, $max_atmosphering_speed, $crew, $passengers, $cargo_capacity, $consumables, $hyperdrive_rating, $MGLT, $starship_class, $created, $edited, $url);

        if($result){
            header("Location: ./../../viewList");
        }
    }







?>