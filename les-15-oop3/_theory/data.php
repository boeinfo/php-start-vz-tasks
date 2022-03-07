<?php

require_once 'classes.php';

$sql = "SELECT * FROM publication;";
$publication = array();

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$link = mysqli_connect("localhost", "root", "", "test3");
mysqli_set_charset($link, "utf8mb4");

if(mysqli_connect_errno()) {
    echo "Ошибка подключения к БД: ".mysqli_connect_error();
    exit();
} 

$res = mysqli_query($link, $sql);

if(!$res) {
        echo "Не получается получить данные".mysqli_error($link);
        exit();
    }    

while($row = mysqli_fetch_array($res)){
    $publication[] = new $row['type']($row);
}


?>