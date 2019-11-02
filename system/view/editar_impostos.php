<?php

if($_POST["selecionarImposto"] == ""){

    echo  "<script> alert('Selecione um imposto para ser editado.');";
    echo "javascript:window.location='../../pages/impostos.php'</script>";

}else{

    $id = $_POST["selecionarImposto"];

    echo ($id);

}