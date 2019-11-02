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
        <h1>Mercadinho da Soft - Cadastro de produtos</h1>

        <nav>
            <a href="/MercadinhoDaSoft/index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="/MercadinhoDaSoft/pages/produtos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Produtos</a>
            <a href="/MercadinhoDaSoft/pages/impostos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Impostos</a>
            <a href="/MercadinhoDaSoft/pages/vendas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>


    <section>
       
        <form name="frmCadastroProdutos" id="frmCadastroProdutos" method="POST" action="../system/view/inserir_produtos.php">

            <legend>Cadastre seu produto</legend>
            <div class="form-group">
                <label for="nomeProduto">Nome do produto: </label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Arroz branco">
            </div>
            <div class="form-group">
                <label for="valorProduto">Valor do produto: </label>
                <input type="decimal" class="form-control" name="valorProduto" id="valorProduto" placeholder="R$5,00">
            </div>
            <div class="form-group">
                <label for="quantidadeProduto">Quantidade do produto: </label>
                <input type="text" class="form-control" name="quantidadeProduto" id="quantidadeProduto" placeholder="5">
            </div>

            <!-- Deve puxar marcas cadastradas no banco de dados -->
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <label for="selecionarImposto">Selecione o tipo de imposto do produto: </label>
                  <select name="selecionarImposto" class="custom-select mr-sm-2" id="selecionarTaxa">
                      <option value="">Escolha</option>

                    <?php
                        
                        //importa arquivo com conexao do banco de dados
                        include "../system/connection/conexao.php";
                        
                        //Carrega tipos de impostos do banco de dados criando uma tag html <option> para cada item do banco, passsando a taxa de cada imposto como valor da option
                        foreach($pdo->query('select * from impostos') as $row){
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