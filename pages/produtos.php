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
        <h1>Mercadinho da Soft - Produtos</h1>

        <nav>
            <a href="/MercadinhoDaSoft/index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="/MercadinhoDaSoft/pages/produtos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Produtos</a>
            <a href="/MercadinhoDaSoft/pages/impostos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Impostos</a>
            <a href="/MercadinhoDaSoft/pages/vendas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>

    <section>
       
    <form name="frmExibirProdutos" id="frmExibirProdutos">

    <legend>Produtos cadastrados</legend>

        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label for="selecionarProduto">Selecione um produto e a ação desejada:</label>
                <select name="selecionarProduto" class="custom-select mr-sm-2" id="selecionarProduto">
                    <option value="">Escolha</option>

                    <?php
                        
                        //importa arquivo com conexao do banco de dados
                        include "../system/connection/conexao.php";
                        
                        //Carrega tipos de impostos do banco de dados criando uma tag html <option> para cada item do banco, passsando a taxa de cada imposto como valor da option
                        foreach($pdo->query('select * from produtos') as $row){
                            echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
                        }   
                    ?>
                    
                </select>
            </div>
        </div>

        <hr>

        <a href="/MercadinhoDaSoft/pages/cadastroProdutos.php" type="button" class="btn btn-primary">Cadastrar novo produto</a>
        <button type="submit" formaction="/MercadinhoDaSoft/pages/edicaoProdutos.php" formmethod="POST" formenctype="multipart/form-data" class="btn btn-success">Editar produto</button>
        <button type="submit" formaction="/MercadinhoDaSoft/system/view/excluir_produtos.php" formmethod="POST" formenctype="multipart/form-data" class="btn btn-danger">Excluir produto</button>
    </form>

    </section>
</body>
</html>