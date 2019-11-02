<?php

    if($_POST["selecionarImposto"] == ""){

        echo  "<script> alert('Selecione um imposto para ser excluido.');";
        echo "javascript:window.location='../pages/impostos.php'</script>";


    }else{

        $id = $_POST["selecionarImposto"];

        try{
            
            require_once "../controller/imposto.php";

            $imp = new imposto;

            $resultado = $imp->excluir($id);

            if($resultado){
                echo  "<script> alert('Imposto deletado com sucesso!');";
                echo "javascript:window.location='../../pages/impostos.php';</script>";
            }else{
                echo "<script> alert('Erro ao deletar imposto! Confira que este imposto não está sendo usando por nenhum produto.');";
                echo "javascript:window.location='../../pages/impostos.php';</script>";
            }
           
        }catch (PDOException  $e) {
            print $e->getMessage();
        }


    }

?>