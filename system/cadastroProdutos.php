<?php

if($_POST["nomeProduto"] == ""){
    echo  "<script> alert('Preencha o campo nome do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.html'</script>";
}
else if($_POST["quantidadeProduto"] == ""){
    echo  "<script> alert('Preencha o campo Quantidade do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.html';</script>";
}
else if($_POST["valorProduto"] == ""){
    echo  "<script> alert('Preencha o campo valor do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.html';</script>";
}
else if($_POST["selecionarMarca"] == ""){
    echo  "<script> alert('Selecione a marca do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.html';</script>";
}
else{
    $nome = $_POST["nomeProduto"];
    $quantidade = $_POST["quantidadeProduto"];
    $valor = $_POST["valorProduto"];
    $marca = $_POST["selecionarMarca"];

    echo "<script> alert('Cadastro efetuado com sucesso!');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.html';</script>";

    //Falta conectar ao bd e fazer a inserção de valores
}

?>

