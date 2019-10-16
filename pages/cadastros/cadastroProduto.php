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
        <h1>Mercadinho da Soft - Cadastro de produtos</h1>

        <nav>
            <a href="../../index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="cadastroProduto.php" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de produtos</a>
            <a href="cadastroMarcas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de marcas</a>
            <a href="../vendas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>


    <section>
       
        <form name="frmCadastroProduto" id="frmCadastroProduto" method="POST" action="../../system/inserir_produto.php">

            <legend>Cadastre seu produto</legend>
            <div class="form-group">
                <label for="nomeProduto">Nome do produto: </label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Arroz branco">
            </div>
            <div class="form-group">
                <label for="quantidadeProduto">Quantidade do produto: </label>
                <input type="text" class="form-control" name="quantidadeProduto" id="quantidadeProduto" placeholder="5">
            </div>
            <div class="form-group">
                <label for="valorProduto">Valor do produto: </label>
                <input type="text" class="form-control" name="valorProduto" id="valorProduto" placeholder="R$5,00">
            </div>

            <!-- Deve puxar marcas cadastradas no banco de dados -->
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <label for="selecionarMarca">Selecione a marca do produto: </label>
                  <select name="selecionarMarca" class="custom-select mr-sm-2" id="selecionarMarca">
                      <option value="">Escolha</option>

                    <?php
                        
                        $pdo = new PDO("pgsql:host=localhost; dbname=mercadinho;", "postgres", "postgres");

                        foreach($pdo->query('select * from marca') as $row){
                            echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
                        }   
                    ?>
                    
                  </select>

                </div>
            </div>
            
            <hr>
            
            <button type="submit" class="btn btn-primary">Cadastrar produto</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
            
        </form>

    </section>

</body>
</html>