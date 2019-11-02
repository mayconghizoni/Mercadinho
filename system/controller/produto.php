<?php

// include "../connection/conexao.php";

class produto{

    function excluir($id){

        $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres"); //Verificar

        $resultado = $pdo->exec("DELETE FROM produtos WHERE id = $id;");

        return $resultado;

    }

    function editar(){

    }

    function cadastrar($impostos_id, $nome, $qtd, $valor){

        $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres"); //Verificar

        //Executa comando para inserir novo produto no banco de dados
        $resultado = $pdo->exec("INSERT INTO produtos (impostos_id, nome, quantidade, valor) VALUES ($impostos_id , '$nome', $qtd, $valor);");

        return $resultado;

    }
    
}