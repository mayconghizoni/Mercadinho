$(document).ready(function(){

    MERCADINHO.marcas.carregarMarcas = function(){

        $.ajax({
            type:"GET",
            url: "MercadinhoDaSoft/system/carregaMarcas.php",
            success: function(marcas) {
                if (marcas!=""){


                    //Cria opção escolha com valor vazio como padrão caso haja algo no banco de dados
                    $("selecionarMarca").html("")
                    var option = document.createElement("option")
                    option.setAttribute("value", "")
                    option.innerHTML = ("Escolha")
                    $("#selecionarMarca").append(option)

                    //A cada valor encontrado no banco, cria mais uma option dentro do select
                    for (var i = 0; i < marcas.length; i++){

                        var option = document.createElement("option")
                        option.setAttribute("value", marcas[i].id)
                        option.innerHTML = (marcas[i].nome)
                        $("#selecionarMarca").append(option)

                    }


                }else{
                    $("selecionarMarca").html("")

                    //Caso o não tenha nenhum valor cadastrado no banco ele cria uma uma option com aviso!
                    var option = document.createElement("option")
                    option.setAttribute("value", "")
                    option.innerHTML = ("Cadastre uma marca primeiro!")
                    $("#selecionarMarca").append(option)
                    $("#selecionarMarca").addClass("aviso")

                }
            },
            error: function(info) {

                alert("Erro ao buscar marcas: "+info.status+" - " + info.statusText);
                javascript:window.location='../pages/cadastros/cadastroPRoduto.html';

            } 
        })

    }

    MERCADINHO.marcas.carregarMarcas()


})