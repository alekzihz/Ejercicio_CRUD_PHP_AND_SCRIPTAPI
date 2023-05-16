<?php

$request = $_SERVER['REQUEST_URI'];

$request = strtok($request, '?');


$url = explode('/', trim($request, '/'));
    switch ($url[0]) {

        case "/":
            require('main.php');
            break;

        case "upload":
            echo "entro en upload";

            require("controller/c_uploadCsv.php");
            break;

        case "main":
            require("main.php");
            break;
            
        case "viewList":
            require("view/viewCsv.php");
            break;
            

        case "element":
            switch($url[1])
            {
                case "delete":
                    $id=$url[2];
                    require("controller/c_deleteElement.php");
                    break;
                case "viewAdd":
                    require("view/viewAddElement.php");
                    break;
                case "detail":
                    $id=$url[2];
                    require("view/viewDetailElement.php");
                    break;
                case "insert":
                    require("controller/c_addElement.php");
                    break;
                default:
                require("./../../main");
                break;
            }
            break;
            default:
            require("main.php");
            break;
    }
?>