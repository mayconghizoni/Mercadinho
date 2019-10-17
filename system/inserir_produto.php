<?php

if($_POST["nomeProduto"] == ""){
    echo  "<script> alert('Preencha o campo nome do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.php'</script>";
}
else if($_POST["quantidadeProduto"] == ""){
    echo  "<script> alert('Preencha o campo Quantidade do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.php';</script>";
}
else if($_POST["valorProduto"] == ""){
    echo  "<script> alert('Preencha o campo valor do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.php';</script>";
}
else if($_POST["selecionarTaxa"] == ""){
    echo  "<script> alert('Selecione a marca do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.php';</script>";
}
else{

    $nome = $_POST["nomeProduto"];
    $qtd = $_POST["quantidadeProduto"];
    $valor = $_POST["valorProduto"];
    $taxa = $_POST["selecionarTaxa"];

    try { 

        include "conexao.php";

        $pdo_exec = $pdo->exec("INSERT INTO produtos (taxa, nome, quantidade, valor) VALUES ($taxa , '$nome', $qtd, $valor);");

        if($pdo_exec){
            echo "<script> alert('Cadastro efetuado com sucesso!');";
            echo "javascript:window.location='../pages/cadastros/cadastroProduto.php';</script>";
        }else{
            echo "<script> alert('Erro ao efetuar cadastro!');";
            echo "javascript:window.location='../pages/cadastros/cadastroProduto.php';</script>";
        }

     } catch (PDOException  $e) {
        print $e->getMessage();
     }

}

?>

