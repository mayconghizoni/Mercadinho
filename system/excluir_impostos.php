<?php

    if($_POST["selecionarImposto"] == ""){

        echo  "<script> alert('Selecione um imposto para ser excluido.');";
        echo "javascript:window.location='../pages/impostos.php'</script>";


    }else{

        $id = $_POST["selecionarImposto"];

        try{

            include "connection/conexao.php";

            //Executa comando para inserir novo tipo de imposto no banco de dados
            $pdo_exec = $pdo->exec("DELETE FROM impostos WHERE id = $id;");

            if($pdo_exec){
                echo  "<script> alert('Imposto deletado com sucesso!');";
                echo "javascript:window.location='../pages/impostos.php';</script>";
            }else{
                echo "<script> alert('Erro ao deletar imposto!');";
                echo "javascript:window.location='../pages/impostos.php';</script>";
            }
           
        }catch (PDOException  $e) {
            print $e->getMessage();
        }


    }

?>