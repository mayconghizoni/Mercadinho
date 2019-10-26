<?php 
    try{
        $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres");
    }
    catch(PDOexception $e){
        die("Erro ao conectar com o banco de dados: ". $e->getMessage());
    }
?>