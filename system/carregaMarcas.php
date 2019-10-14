<?php

try {

    $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres");

    $pdo_exec = $pdo->exec("select * from marca");

    } catch (PDOException  $e) {
    print $e->getMessage();
    }

?>