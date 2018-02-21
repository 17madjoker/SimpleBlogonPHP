<?php

define('MYSQL_SERVER','localhost');
define('MYSQL_USER','root');
define('MYSQL_PASSWORD','');
define('MYSQL_DB','phpblog');

function db_connect()
{
    $db = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB)
        or die('Не удалось подключиться к БД '.mysqli_error($db));
    mysqli_set_charset($db,'utf8');
    return $db;
}
