function valid_cadastro_produto(){
    if(document.frmCadastroProduto.nomeProduto.value==""){
        alert("Preencha o campo nome.");
    }
    else if(document.frmCadastroProduto.quantidadeProduto.value==""){
        alert("Informe a quantidade do produto");
    }
    else if(document.frmCadastroProduto.valorProduto.value==""){
        alert("Informe o valor do produto.");
    }
    else if(document.frmCadastroProduto.selecionarMarca.selectedIndex==""){
        alert("Informe a marca do produto");
    }
    else{
        return true;
    }
    return false;
}
function valid_vendas(){
    if(document.frmVendaProduto.selecionarProduto.selectedIndex==""){
        alert("Selecione o produto.");
    }
    else if(document.frmVendaProduto.qtdVendida.value==""){
        alert("Informe a quantidade que quer vender.");
    }
    else{
        return true;
    }
    return false;
}
function valid_cadastro_marca(){
    if(document.frmCadastroMarca.nomeMarca.value==""){
        alert("Informe o nome da marca que quer cadastrar.");
    }
    else if(document.frmCadastroMarca.taxaImposto.value==""){
        alert("Informe a taxa de imposto.");
    }
    else{
        return true;
    }
    return false;
}