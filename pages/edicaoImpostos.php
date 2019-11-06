<?php

if($_POST["selecionarImposto"] == ""){

    echo  "<script> alert('Selecione um imposto para ser editado.');";
    echo "javascript:window.location='impostos.php'</script>";

}else{

    $id = $_POST["selecionarImposto"];

        //importa arquivo com conexao do banco de dados
        include "../system/connection/conexao.php";

        //Carrega tipos de impostos do banco de dados criando uma tag html <option> para cada item do banco, passsando a taxa de cada imposto como valor da option
        foreach($pdo->query("select * from impostos where id = $id") as $row){
            $nome = $row['nome'];
            $taxa = $row['taxa'];
        }  

    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/MercadinhoDaSoft/styles/site.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Mercadinho da Soft</title>
</head>
<body>
    <header>
        <h1>Mercadinho da Soft - Edição de Impostos</h1>

        <nav>
            <a href="/MercadinhoDaSoft/index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="/MercadinhoDaSoft/pages/produtos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Produtos</a>
            <a href="/MercadinhoDaSoft/pages/impostos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Impostos</a>
            <a href="/MercadinhoDaSoft/pages/vendas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>


    <section>
       
        <form name="frmEditaImpostos" id="frmEditaImpostos" method="POST" action="../system/view/editar_impostos.php">

            <legend>Edite seu imposto</legend>

            <input type="hidden" name="idImposto" value="<?php echo $id ?>">

            <div class="form-group">
                <label for="nomeImposto">Tipo de imposto: </label>
                <input type="text" class="form-control" name="nomeImposto" id="nomeImposto" value="<?php echo $nome ?> ">
            </div>

            <div class="form-group">
                    <label for="taxaImposto">Taxa (%): </label>
                    <input type="text" class="form-control" name="taxaImposto" id="taxaImposto" value="<?php echo $taxa ?> ">
            </div>
            
            <hr>
            
            <button type="submit" class="btn btn-primary">Editar imposto</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
            
        </form>

    </section>
</body>
</html>

<?php

}

?>