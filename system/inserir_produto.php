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
else if($_POST["selecionarMarca"] == ""){
    echo  "<script> alert('Selecione a marca do produto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroProduto.php';</script>";
}
else{

    $nome = $_POST["nomeProduto"];
    $quantidade = $_POST["quantidadeProduto"];
    $valor = $_POST["valorProduto"];
    $marca = $_POST["selecionarMarca"];

    try { 

        $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres");

        $pdo_exec = $pdo->exec("INSERT INTO produtos (id, marcas_id, nome, quantidade, valor) VALUES (nextval('books_sequence_2'), $marca , '$nome', $quantidade, $valor);");

        // print_r($pdo->errorInfo());

        // echo "<hr>";

        // $pdo_query = $pdo->query("select * from produtos;");

        // print_r($pdo->errorInfo());

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

