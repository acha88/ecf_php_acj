<?php

function dbconnect()
{
    $dsn = "pgsql:host=10.113.28.39;port=5432;dbname=charlotte_php_ecf";
    $user = "ajeanvoi";
    $password = "AfpaCDA54";
    try {
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
    } catch (PDOException $e) {
        echo ($e->getMessage());
    }
}