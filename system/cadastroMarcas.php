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

    echo "<script> alert('Cadastro efetuado com sucesso!');";
    echo "javascript:window.location='../pages/cadastros/cadastroMarcas.html';</script>";
}

    // $conec = pg_connect('host=localhost port="5432" user=postgres dbname=mercadinho password=postgres');

    // $conec.pg_query = "INSERT INTO marcas (nome, taxa_imposto) VALUES (".$nome.", ".$taxa.");";

?>

