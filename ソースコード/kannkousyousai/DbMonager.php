<?php
function getDb(){
    $dsn = 'mysql:dbname=LAA1291146-mentaisand; host=localhost; charset=utf8';
    $username = 'LAA1291146';
    $password = 'MentaiSand';
    $pdo=new PDO($dsn,$username,$password);
    return $pdo;
}
