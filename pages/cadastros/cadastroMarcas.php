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
        <h1>Mercadinho da Soft - Cadastro de marcas</h1>

        <nav>
            <a href="../../index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="cadastroProduto.php" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de produtos</a>
            <a href="cadastroMarcas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de marcas</a>
            <a href="../vendas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>


    <section>
       
        <form name="frmCadastroMarca" id="frmCadastroMarca" method="POST" action="../../system/inserir_marcas.php">

            <legend>Cadastre sua marca</legend>
            <div class="form-group">
                <label for="nomeMarca">Nome da marca: </label>
                <input type="text" class="form-control" name="nomeMarca" id="nomeMarca" placeholder="Royal">
            </div>

            <div class="form-group">
                    <label for="taxaImposto">Imposto: </label>
                    <input type="text" class="form-control" name="taxaImposto" id="taxaImposto" placeholder="0.70 (%)">
            </div>
            
            <hr>
            
            <button type="submit" class="btn btn-primary">Cadastrar marca</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
            
        </form>

    </section>
</body>
</html>