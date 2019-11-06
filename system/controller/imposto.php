<?php

include "../connection/conexao.php"; 

class imposto{

    function excluir($id){

        global $pdo;

        $resultado = $pdo->exec("DELETE FROM impostos WHERE id = $id;");

        return $resultado;

    }

    function editar($id, $nome, $taxa){

        global $pdo;

        $resultado = $pdo->exec("UPDATE impostos SET nome = '$nome', taxa = $taxa WHERE id = $id;");

        return $resultado;

    }

    function cadastrar($nome, $taxa){
        
        global $pdo;

        //Executa comando para inserir novo tipo de imposto no banco de dados
        $resultado = $pdo->exec("INSERT INTO impostos (nome, taxa) VALUES ('$nome', $taxa);");

        return $resultado;

    }
    
}
