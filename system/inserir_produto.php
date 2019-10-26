<?php

//Verifica se os campos do formulário estão preenchidos

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
else if($_POST["selecionarImposto"] == ""){
    echo  "<script> alert('Selecione o tipo de imposto do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.php';</script>";
}
else{

    $nome = $_POST["nomeProduto"];
    $qtd = $_POST["quantidadeProduto"];
    $valor = $_POST["valorProduto"];
    $impostos_id = $_POST["selecionarImposto"];

    try { 

        //importa arquivo de conexao com banco de dados
        include "connection/conexao.php";

        //Executa comando para inserir novo produto no banco de dados
        $pdo_exec = $pdo->exec("INSERT INTO produtos (impostos_id, nome, quantidade, valor) VALUES ($impostos_id , '$nome', $qtd, $valor);");

        //Exibe mensagem em caso de sucesso ou erro no insert
        if($pdo_exec){
            echo "<script> alert('Cadastro efetuado com sucesso!');";
            echo "javascript:window.location='../pages/produtos.php';</script>";
        }else{
            echo "<script> alert('Erro ao efetuar cadastro!');";
            echo "javascript:window.location='../pages/produtos.php';</script>";
        }

     } catch (PDOException  $e) {
        print $e->getMessage();
     }

}

?>

