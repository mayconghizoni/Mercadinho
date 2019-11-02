<?php

//Verifica se os campos do formulário estão preenchidos
if($_POST["nomeImposto"] == ""){
    echo  "<script> alert('Preencha o campo tipo de imposto.');";
    echo "javascript:window.location='../pages/impostos.php'</script>";
}
else if($_POST["taxaImposto"] == ""){
    echo  "<script> alert('Preencha o campo Imposto.');";
    echo "javascript:window.location='../pages/impostos.php';</script>";
}
else{
    $nome = $_POST["nomeImposto"];
    $taxa = $_POST["taxaImposto"];

    try {

        require_once "../controller/imposto.php";

        $imp = new imposto;

        $resultado = $imp->cadastrar($nome, $taxa);

        //Exibe mensagem em caso de sucesso ou erro no insert
        if($resultado){
            echo  "<script> alert('Cadastro efetuado com sucesso!');";
            echo "javascript:window.location='../../pages/impostos.php';</script>";
        }else{
            echo "<script> alert('Erro ao efetuar cadastro!');";
            echo "javascript:window.location='../../pages/impostos.php';</script>";
        }

     } catch (PDOException  $e) {
        print $e->getMessage();
     }

}   

?>

