<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/site.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Mercadinho da Soft</title>
</head>
<body>
    <header>
        <h1>Mercadinho da Soft - Cadastro Impostos</h1>

        <nav>
            <a href="../../index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="cadastroProduto.php" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de produtos</a>
            <a href="cadastroTipos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de impostos</a>
            <a href="../vendas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>


    <section>
       
        <form name="frmCadastroMarca" id="frmCadastroMarca" method="POST" action="../../system/inserir_impostos.php">

            <legend>Cadastre sua imposto</legend>
            <div class="form-group">
                <label for="nomeTipo">Tipo de imposto: </label>
                <input type="text" class="form-control" name="nomeTipo" id="nomeTipo" placeholder="Alimentos">
            </div>

            <div class="form-group">
                    <label for="taxaImposto">Taxa (%): </label>
                    <input type="text" class="form-control" name="taxaImposto" id="taxaImposto" placeholder="0.70 (%)">
            </div>
            
            <hr>
            
            <button type="submit" class="btn btn-primary">Cadastrar imposto</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
            
        </form>

    </section>
</body>
</html>