<?php

$connection = null;

function query($sql)
{
        global $connection;
        if ($connection === null) {
                // localhost = 127.0.0.1, 5432 is default port of
                //  postgresql
                $connection = pg_connect("host=localhost port=5432
                 dbname=schools user=postgres password=postgres");
        }

        $rawResult = pg_query($connection, $sql);
        return pg_fetch_all($rawResult);
}
 
