<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/MercadinhoDaSoft/styles/site.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <title>Mercadinho da Soft</title>
</head>
<body>
    <header>
        <h1>Mercadinho da Soft - Impostos</h1>

        <nav>
            <a href="/MercadinhoDaSoft/index.html" type="button" class="btn btn-secondary btn-sm btn-sm">Home</a>
            <a href="/MercadinhoDaSoft/pages/produtos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Produtos</a>
            <a href="/MercadinhoDaSoft/pages/impostos.php" type="button" class="btn btn-secondary btn-sm btn-sm">Impostos</a>
            <a href="/MercadinhoDaSoft/pages/vendas.php" type="button" class="btn btn-secondary btn-sm btn-sm">Vendas</a>
        </nav>
    </header>

    <section>
       
    <form name="frmExibirImpostos" id="frmExibirImpostos" method="POST" action="/MercadinhoDaSoft/system/form.php">

        <legend>Impostos cadastrados</legend>

            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label for="selecionarImposto">Selecione um imposto e a ação desejada:</label>
                    <select name="selecionarImposto" class="custom-select mr-sm-2" id="selecionarImposto">
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

            <a href="/MercadinhoDaSoft/pages/cadastroImpostos.html" type="button" class="btn btn-primary">Cadastrar novo imposto</a>
            <button type="submit" formaction="/MercadinhoDaSoft/system/view/editar_impostos.php" formmethod="POST" formenctype="multipart/form-data" class="btn btn-success">Editar imposto</button>
            <button type="submit" formaction="/MercadinhoDaSoft/system/view/excluir_impostos.php" formmethod="POST" formenctype="multipart/form-data" class="btn btn-danger">Excluir imposto</button>
    </form>

    </section>
</body>
</html>