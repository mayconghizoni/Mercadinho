<?php

    if($_POST["selecionarProduto"] == ""){

        echo  "<script> alert('Selecione um produto para ser excluido.');";
        echo "javascript:window.location='../pages/produtos.php'</script>";


    }else{

        $id = $_POST["selecionarProduto"];

        try{

            require_once "../controller/produto.php";

            $prod = new produto;

            $resultado = $prod->excluir($id);

            if($resultado){
                echo  "<script> alert('Produto deletado com sucesso!');";
                echo "javascript:window.location='../../pages/produtos.php';</script>";
            }else{
                echo "<script> alert('Erro ao deletar produto!');";
                echo "javascript:window.location='../../pages/produtos.php';</script>";
            }
           
        }catch (PDOException  $e) {
            print $e->getMessage();
        }


    }

?>