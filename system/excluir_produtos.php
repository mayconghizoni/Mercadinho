<?php

    if($_POST["selecionarProduto"] == ""){

        echo  "<script> alert('Selecione um produto para ser excluido.');";
        echo "javascript:window.location='../pages/produtos.php'</script>";


    }else{

        $id = $_POST["selecionarProduto"];

        try{

            include "connection/conexao.php";

            //Executa comando para inserir novo tipo de imposto no banco de dados
            $pdo_exec = $pdo->exec("DELETE FROM produtos WHERE id = $id;");

            if($pdo_exec){
                echo  "<script> alert('Produto deletado com sucesso!');";
                echo "javascript:window.location='../pages/produtos.php';</script>";
            }else{
                echo "<script> alert('Erro ao deletar produto!');";
                echo "javascript:window.location='../pages/produtos.php';</script>";
            }
           
        }catch (PDOException  $e) {
            print $e->getMessage();
        }


    }

?>