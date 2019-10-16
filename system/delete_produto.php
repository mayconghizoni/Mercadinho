<?php

if($_POST["qtdVendida"] == ""){
    echo  "<script> alert('Quantos produtos deseja vender? Preencha este campo para continuar.');";
    echo "javascript:window.location='../pages/vendas.html';</script>";
}
else if($_POST["selecionarProduto"] == ""){
    echo  "<script> alert('Selecione o produto a ser vendido.');";
    echo "javascript:window.location='../pages/vendas.html';</script>";
}
else{
    $quantidade = $_POST["qtdVendida"];
    $produto = $_POST["selecionarProduto"];

    $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres");


    
    // echo "<script> alert('Venda efetuada com sucesso!');";
    // echo "javascript:window.location='../pages/vendas.html';</script>";
}

?>