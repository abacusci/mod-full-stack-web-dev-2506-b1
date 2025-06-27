<?php

$connection = null;

function query($sql)
{
        global $connection;
        if ($connection === null) {
                $connection = pg_connect("host= localhost port=5432 dbname=schools user=postgres password=postgres");
        }

        $result = pg_query($connection, $sql);
        $result = pg_fetch_all($result);
        return $result;
}
