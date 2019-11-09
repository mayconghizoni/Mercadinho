<?php

//Verifica se os campos do formulário estão preenchidos
if($_POST["nomeImposto"] == ""){
    echo  "<script> alert('Preencha o campo tipo de imposto.');";
    echo "javascript:window.location='../../pages/impostos.php'</script>";
}
else if($_POST["taxaImposto"] == ""){
    echo  "<script> alert('Preencha o campo Imposto.');";
    echo "javascript:window.location='../../pages/impostos.php';</script>";
}else if($_POST["idImposto"] == ""){
    echo  "<script> alert('FATAL ERROR!');";
    echo "javascript:window.location='../../pages/impostos.php';</script>";
}
else{
    $id = $_POST["idImposto"];
    $nome = $_POST["nomeImposto"];
    $taxa = $_POST["taxaImposto"];

    require_once "../controller/imposto.php";

    //instancia novo objeto do tipo imposto e chama o método editar imposto

    $imp = new imposto;

    $resultado = $imp->editar($id, $nome, $taxa);
    
    //Mostra mensagem pós execução de comando
    if($resultado){
        echo  "<script> alert('Imposto editado com sucesso!');";
        echo "javascript:window.location='../../pages/impostos.php';</script>";
    }else{
        echo "<script> alert('Erro ao editar imposto! Confira que este imposto não está sendo usando por nenhum produto.');";
        echo "javascript:window.location='../../pages/impostos.php';</script>";
    }

}

?>