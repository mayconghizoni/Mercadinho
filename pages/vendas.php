<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/site.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Mercadinho da Soft</title>
    <script src="../js/site.js"></script>
</head>
<body>
    <header>
        <h1>Mercadinho da Soft - Venda de produtos</h1>

        <nav>
            <a href="../index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="cadastros/cadastroProduto.html" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de produtos</a>
            <a href="cadastros/cadastroMarcas.html" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de marcas</a>
            <a href="vendas.html" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>

    <section>
        
        <form name="frmVendaProduto" id="frmVendaProduto" method="POST" action="../system/vendaProdutos.php">

            <!-- Deve puxar produtos cadastrados no banco de dados -->
            <legend>Selecione um produto para venda</legend>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <label for="selecionarProduto">Selecione o produto: </label>
                  <select name="selecionarProduto" class="custom-select mr-sm-2" id="selecionarProduto">
                    <option value="">Escolha</option>
                    <option value="1">Batata</option>
                    <option value="2">Arroz</option>
                    <option value="3">Vinho</option>
                  </select>
                </div>
            </div>

            <div class="form-group">
                <label for="qtdVendida">Quantos produtos deseja vender: </label>
                <input name="qtdVendida" type="text" class="form-control" id="qtdVendida" placeholder="2">
            </div>
            
            <hr>
            
            <button type="submit" class="btn btn-primary">Vender produto</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            
        </form>

    </section>

    <footer>
        Copyright &copy; Maycon Ghizoni 2019
    </footer>
</body>
</html>