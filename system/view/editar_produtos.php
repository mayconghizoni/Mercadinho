<?php

//Verifica se os campos do formulário estão preenchidos

if($_POST["nomeProduto"] == ""){
    echo  "<script> alert('Preencha o campo nome do produto.');";
    echo "javascript:window.location='../pages/edicaoProdutos.php'</script>";
}
else if($_POST["quantidadeProduto"] == ""){
    echo  "<script> alert('Preencha o campo Quantidade do produto.');";
    echo "javascript:window.location='../pages/edicaoProdutos.php';</script>";
}
else if($_POST["valorProduto"] == ""){
    echo  "<script> alert('Preencha o campo valor do produto.');";
    echo "javascript:window.location='../pages/edicaoProdutos.php';</script>";
}
else if($_POST["selecionarImposto"] == ""){
    echo  "<script> alert('Selecione o tipo de imposto do produto.');";
    echo "javascript:window.location='../pages/edicaoProdutos.php';</script>";
}
else{

    $id = $_POST['idProduto'];
    $nome = $_POST["nomeProduto"];
    $qtd = $_POST["quantidadeProduto"];
    $valor = $_POST["valorProduto"];
    $impostos_id = $_POST["selecionarImposto"];

    require_once "../controller/produto.php";

    $prod = new produto;

    $resultado = $prod->editar($nome, $qtd, $valor, $impostos_id, $id);

    if($resultado){
        echo  "<script> alert('Produto editado com sucesso!');";
        echo "javascript:window.location='../../pages/produtos.php';</script>";
    }else{
        echo "<script> alert('Erro ao editar produto!');";
        echo "javascript:window.location='../../pages/produtos.php';</script>";
    }
}