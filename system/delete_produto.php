<?php

if($_POST["selecionarProduto"] == ""){
    echo  "<script> alert('Selecione o produto a ser vendido.');";
    echo "javascript:window.location='../pages/vendas.php';</script>";
}
else if($_POST["qtdVendida"] == ""){
    echo  "<script> alert('Selecione o deseja vender.');";
    echo "javascript:window.location='../pages/vendas.php';</script>";
}else{
    $qtd = $_POST["qtdVendida"];
    $produto = $_POST["selecionarProduto"];

    include "conexao.php";

    //Consulta quantidade no banco
    $consulta = $pdo->prepare("select quantidade from produtos where id = $produto");

    $consulta->bindParam(':quantidade', $_GET['quantidade'], PDO::PARAM_STR);
    
    $consulta->execute();

    $linhas_quantidade_atual = $consulta->fetch(PDO::FETCH_ASSOC);

    $consulta->closeCursor();

    if($linhas_quantidade_atual['quantidade'] < $qtd){

        echo "<script> alert('Itens insuficientes no estoque!');";
        echo "javascript:window.location='../pages/vendas.php';</script>";

    }else{

        //Consulta taxa referente a produto
        $consulta = $pdo->prepare("select taxa from produtos where id = $produto");

        $consulta->bindParam(':taxa', $_GET['taxa'], PDO::PARAM_STR);

        $consulta->execute();

        $linha_taxas = $consulta->fetch(PDO::FETCH_ASSOC);

        $consulta->closeCursor();

        //consuklta valor referente a produto
        $consulta = $pdo->prepare("select valor from produtos where id = $produto");

        $consulta->bindParam(':valor', $_GET['valor'], PDO::PARAM_STR);

        $consulta->execute();

        $linha_valores = $consulta->fetch(PDO::FETCH_ASSOC);

        // Calcula desconto e lucro da venda

        $desconto = ($linha_valores["valor"] / 100) * $linha_taxas["taxa"];

        $valor_lucro = $linha_valores["valor"] - $desconto;

        
        //Faz update na quantidade

        $new_qtd = $linhas_quantidade_atual['quantidade'] - $qtd;

        $update_comando = $pdo->exec("update produtos set quantidade=$new_qtd where id = $produto");

        //Mostra na tela informações

        $update_comando = true;

        if($update_comando){
            echo "<script> alert('Valor total dos produto vendidos: R$".$linha_valores['valor'] * $qtd."!') </script>";
            echo "<script> alert('Taxa de imposto total sobre os produtos venditos: R$".$desconto * $qtd." - Referênte à ".$linha_taxas['taxa']."(%) do valor de cada produto.') </script>";
            echo "<script> alert('Taxa de imposto referente a produto unitário: R$".$desconto."!') </script>";
            echo "<script> alert('Valor lucrativo com a venda do produto: R$".$valor_lucro * $qtd."!');";
            echo "javascript:window.location='../pages/vendas.php';</script>";
        }else{
            echo "<script> alert('Erro ao executar comando!') </script>";
        }

    }

}

?>