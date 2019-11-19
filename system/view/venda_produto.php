<?php

//Verifica se os campos do formulário estão preenchidos

if($_POST["selecionarProduto"] == ""){
    echo  "<script> alert('Selecione o produto a ser vendido.');";
    echo "javascript:window.location='../../pages/vendas.php';</script>";
}
else if($_POST["qtdVendida"] == "" || $_POST["qtdVendida"] <= 0){
    echo  "<script> alert('Selecione quantos produtos deseja vender.');";
    echo "javascript:window.location='../../pages/vendas.php';</script>";
}else{
    $qtd = $_POST["qtdVendida"];
    $produto = $_POST["selecionarProduto"];

    try{

        require_once "../controller/produto.php";

        $prod = new produto;

        $resultado = $prod->vender($qtd, $produto);

    }catch(PDOException $e){
        print $e->getMessage();
    }
}

?>