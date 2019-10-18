<?php

//Verifica se os campos do formulário estão preenchidos
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
        
        //importa arquivo de conexao com banco de dados

        include "conexao.php";

        //Executa comando para inserir novo tipo de imposto no banco de dados
        $pdo_exec = $pdo->exec("INSERT INTO impostos (nome, taxa) VALUES ('$nome', $taxa);");

        //Exibe mensagem em caso de sucesso ou erro no insert
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

