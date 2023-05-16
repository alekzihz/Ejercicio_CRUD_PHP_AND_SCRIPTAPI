<?php

require("./model/connectDB.php");
require("./model/queries.php");
$db = connectaDB();

$data = getData($db);
if(count($data)>0){
   header("Location: ./viewList");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Input</title>
    <link rel ="stylesheet" href="css/formUpload.css">

</head>

<body>
    <div class="wrapper">
        <div class="alert alert-danger">
        </div>
        <form action="./upload" method="post" enctype="multipart/form-data">
            <label for="file-input">Select a file:</label>
            <br>
            <input type="file" id="file-input" name="file"> 
		    <br>
		    <input type="submit" name="submite" value="Upload">
	    </form>
    </div>

</body>
</html>
