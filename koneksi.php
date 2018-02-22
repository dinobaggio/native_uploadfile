<?php

CONST DB_HOST = 'localhost';
CONST DB_USER = 'root';
CONST DB_PASSWORD = '';
CONST DB_NAME = 'upload_file';

$constr = sprintf("mysql:host=%s;dbname=%s;charset=utf8", DB_HOST, DB_NAME);

try {
    $kon = new PDO($constr, DB_USER, DB_PASSWORD);
    $kon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "koneksi lancar";
} catch (PDOException $e) {
    echo $e->getMessage();
}