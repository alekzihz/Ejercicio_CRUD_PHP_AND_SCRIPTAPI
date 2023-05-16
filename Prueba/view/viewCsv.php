<?php
require_once("./model/connectDB.php");
require_once("./model/queries.php");

$db = connectaDB();
$DataCsv = getData($db);

if(count($DataCsv) == 0)
{
    header("Location: ./main");
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Results</title>
    <link rel ="stylesheet" href="../css/viewcsv.css">
</head>
    <body>
        <?php
        for ($i = 0; $i < count($DataCsv); $i++) {?>
            <div class="elements">
                <span><?php echo $DataCsv[$i]['name'];?></span>
            <div>
            <form method="post" action="">
                <button class="detail" type="button" onclick="window.location.href='./element/detail/<?php echo $DataCsv[$i]['id'];?>'">
                 View
                </button>
                <button class="delete" onclick="confirmAndRedirect(<?php echo $DataCsv[$i]['id']; ?>)">Delete</button>
            </form>
            <hr>
        </br>    
        <?php } ?>
        <form method="post" action="./element/viewAdd">
            <button type="submit" name="action" value="add">Add</button>
        </form>
    </body>
</html>
<script>
   function confirmAndRedirect(id) {
        if (confirmSubmit()) {
            // Redireccionar a la URL deseada
            window.location.href = "./element/delete/" + id;
        }
    }

    function confirmSubmit() {
        return confirm("Are you sure you want to delete this element?");
    }
</script>
