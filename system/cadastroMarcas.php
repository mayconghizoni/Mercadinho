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
        $db_connec = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres");

        var_dump($db_connec);

        var_dump($db_connec->query("insert into marcas ('nome','taxa_imposto') values ('fini', 10)"));


        // $query ="select * from marcas;";

        // if($db_connec){
        //     echo ("Sucesso!");
        // }

        // $stm = $db_connec->prepare($query);   
        // $stm->execute(); 


     } catch (PDOException  $e) {
        print $e->getMessage();
     }

    // $connec = pg_connect("host=localhost port=5432 dbname=mercadinho user=postgres password=postgres");
    // $resul = pg_query($connec, "INSERT INTO marcas (nome, taxa_imposto) VALUES ('Fini', 0.90);");
    //     if  (!$result) {
    //         echo "<script>alert('Erro ao inserir dados no banco.');";
    //         echo "javascript:window.location='../pages/cadastros/cadastroMarcas.html';</script>";
    //     }

}   

?>

