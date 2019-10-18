<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/site.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Mercadinho da Soft</title>
</head>
<body>
    <header>
        <h1>Mercadinho da Soft - Venda de produtos</h1>

        <nav>
            <a href="../index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="cadastros/cadastroProduto.php" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de produtos</a>
            <a href="cadastros/cadastroTipos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Cadastro de marcas</a>
            <a href="vendas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>

    <section>
        
        <form name="frmVendaProduto" id="frmVendaProduto" method="POST" action="../system/delete_produto.php">

            <!-- Deve puxar produtos cadastrados no banco de dados -->
            <legend>Selecione um produto para venda</legend>

            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <label for="selecionarProduto">Selecione o produto: </label>
                  <select name="selecionarProduto" class="custom-select mr-sm-2" id="selecionarProduto">

                  <option value="">Escolha</option>

                    <?php

                        //importa arquivo de conexao com banco de dados
                        include "../system/conexao.php";

                        //Carrega produtos do banco de dados criando uma tag html <option> para cada item do banco, passsando o id dos produtos como valor da option
                        foreach($pdo->query('select * from produtos') as $row){
                            echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
                        }   
                        
                    ?>

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
</body>
</html>
