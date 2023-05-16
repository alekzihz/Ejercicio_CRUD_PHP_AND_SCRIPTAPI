<?php
require_once("./model/connectDB.php");
require_once("./model/queries.php");

$db = connectaDB();

//id from url index.php
$element = getElementById($db, $id);

?>

<style>
    .elements {
    background-color: #f2f2f2;
    justify-content:center;
    align-items:center;
    height: 100%;
    }

    .elements button {
        margin-left: 10px;

    }

    .elements span {
        margin-right: 10px;
    }
    a{
        text-decoration:none;
        color:white;    
    }

    button{
    background-color: #4B49AC;
    color:white;
    cursor:pointer; 
    font-size: 16px;  
    width:4%;
    }

</style>
<!DOCTYPE html>
<html>
<head>
    <title>View </title>
    <!--link rel ="stylesheet" type="text/css" href="./../css/detailcsv.css"-->
</head>


<?php for ($i = 0; $i < count($element); $i++) {?>
    <div class="elements">
        <span>Name: <?php echo '</br>'. $element[$i]['name'];?></span></br>
        <span>Model: <?php echo '</br>'.$element[$i]['model'];?></span></br>
        <span>Manufacturer: <?php echo '</br>'.$element[$i]['manufacturer'];?></span></br>
        <span>Cost: <?php echo '</br>'.$element[$i]['cost_in_credits'];?> credits</span></br>
        <span>Length: <?php echo '</br>'.$element[$i]['length'];?></span></br>
        <span>Max Speed: <?php echo '</br>'.$element[$i]['max_atmosphering_speed'];?></span></br>
        <span>Crew: <?php echo '</br>'.$element[$i]['crew'];?></span></br>
        <span>Passengers: <?php echo '</br>'.$element[$i]['passengers'];?></span></br>
        <span>Cargo Capacity: <?php echo '</br>'.$element[$i]['cargo_capacity'];?></span></br>
        <span>Consumables: <?php echo '</br>'.$element[$i]['consumables'];?></span></br>
        <span>Hyperdrive Rating: <?php echo '</br>'.$element[$i]['hyperdrive_rating'];?></span></br>
        <span>MGLT: <?php echo '</br>'.$element[$i]['MGLT'];?></span></br>
        <span>Starship Class: <?php echo '</br>'.$element[$i]['starship_class'];?></span></br>
        <span>Created: <?php 
                    $time = strtotime($element[$i]['created']);
                    $format = date('d/m/Y H:i:s', $time);
                    echo '</br>'.$format;
                    
                    ?>
        </span></br>
        <span>Edited: <?php 
                    $time = strtotime($element[$i]['edited']);
                    $format = date('d/m/Y H:i:s', $time);
                    echo '</br>'.$format;
                    ?>
        </span></br>
        <span>URL: <?php echo '</br>'.$element[$i]['url'];?></span></br></br>
        <button name="submite"><a href="./../../viewList">Back</a></button>
    </div>
<?php } ?>