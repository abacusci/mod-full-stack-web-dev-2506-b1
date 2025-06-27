<?php

$connection = null;
function query($sql){
     global $connection;
     if ($connection === null) {
        $connection = pg_connect("host= localhost port=5432 dbname=schools user=postgres password=posgres");


    


}

}