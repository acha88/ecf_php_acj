<?php

function dbconnect()
{
    $dsn = "pgsql:host=10.113.28.39;port=5432;dbname=ecf_php_acj";
    $user = "ajeanvoi";
    $password = "AfpaCDA54";
    try {
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
    } catch (PDOException $e) {
        echo ($e->getMessage());
    }
}