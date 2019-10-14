<?php

if($_POST["nomeMarca"] == ""){
    echo  "<script> alert('Preencha o campo nome da marca.');";
    echo "javascript:window.location='../pages/cadastros/cadastroMarcas.html'</script>";
}
else if($_POST["taxaImposto"] == ""){
    echo  "<script> alert('Preencha o campo Imposto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroMarcas.html';</script>";
}
else{
    $nome = $_POST["nomeMarca"];
    $taxa = $_POST["taxaImposto"];

    try {

        $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres");

        $pdo_exec = $pdo->exec("INSERT INTO marca (id, nome, taxa_imposto) VALUES (nextval('books_sequence'),'$nome', $taxa);");

        if($pdo_exec){
            echo  "<script> alert('Cadastro efetuado com sucesso!');";
            echo "javascript:window.location='../pages/cadastros/cadastroMarcas.html';</script>";
        }else{
            echo "<script> alert('Erro ao efetuar cadastro!');";
            echo "javascript:window.location='../pages/cadastros/cadastroMarcas.html';</script>";
        }

     } catch (PDOException  $e) {
        print $e->getMessage();
     }

}   

?>

