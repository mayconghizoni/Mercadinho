<?php

if($_POST["nomeTipo"] == ""){
    echo  "<script> alert('Preencha o campo tipo de mercadoria.');";
    echo "javascript:window.location='../pages/cadastros/cadastroTipos.php'</script>";
}
else if($_POST["taxaImposto"] == ""){
    echo  "<script> alert('Preencha o campo Imposto.');";
    echo "javascript:window.location='../pages/cadastros/cadastroTipos.php';</script>";
}
else{
    $nome = $_POST["nomeTipo"];
    $taxa = $_POST["taxaImposto"];

    try {

        include "conexao.php";

        $pdo_exec = $pdo->exec("INSERT INTO impostos (nome, taxa) VALUES ('$nome', $taxa);");

        if($pdo_exec){
            echo  "<script> alert('Cadastro efetuado com sucesso!');";
            echo "javascript:window.location='../pages/cadastros/cadastroTipos.php';</script>";
        }else{
            echo "<script> alert('Erro ao efetuar cadastro!');";
            echo "javascript:window.location='../pages/cadastros/cadastroTipos.php';</script>";
        }

     } catch (PDOException  $e) {
        print $e->getMessage();
     }

}   

?>

