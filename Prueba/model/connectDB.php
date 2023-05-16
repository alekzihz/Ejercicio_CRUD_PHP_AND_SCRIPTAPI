<?php

function connectaDB (){
    return $db = new SQLite3('naveM.db');
}
?>