<?php

define('MYSQL_SERVER', 'mysql.hostinger.ru');
define('MYSQL_USER', 'u675773894_admin');
define('MYSQL_PASSWORD', 'Hosting83333');
define('MYSQL_DB', 'u675773894_blog');

function db_connect() //возвращает идентификатор подключения к mySQL
{
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
/* mysqli_connect – эта функция создает новое соединение с сервером Mysql.
 * В случае удачного завершения выполнения соединения функция вернет
 * параметр – идентификатор подключения,
 * который требуется использовать для выполнения запроса к базе данных.
 * А в случае неудачного завершения выполнения соединения
 * функция вернет FALSE. */
            or die("Error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")) print("Error: ".mysqli_error($link));

    return $link;
}

?>