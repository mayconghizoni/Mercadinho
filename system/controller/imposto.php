<?php

// include "MercadinhoDaSoft/system/connection/conexao.php"; 

class imposto{

    function excluir($id){

        $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres"); //Verificar

        $resultado = $pdo->exec("DELETE FROM impostos WHERE id = $id;");

        return $resultado;

    }

    function editar(){

    }

    function cadastrar($nome, $taxa){
        
        $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres"); //Verificar

        //Executa comando para inserir novo tipo de imposto no banco de dados
        $resultado = $pdo->exec("INSERT INTO impostos (nome, taxa) VALUES ('$nome', $taxa);");

        return $resultado;

    }
    
}
