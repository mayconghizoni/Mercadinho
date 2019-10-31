SOFT = new Object();

$(document).ready(function(){


    SOFT.excluir = function(){

        var id = document.frmExibirImpostos.selecionarImposto.value;

        console.log(id);

            var modalExcluir = {
                title: "Tem certeza que deseja excluir?",
                height: 150,
                width: 400,
                modal: true,
                buttons:{
                    "Sim": function(id){
                        // $.ajax({
                        //     type: "POST",
                        //     url: "/MercadinhoDaSoft/system/deletar_impostos.php",
                        //     data: id,
                        //     success: function(){

                        //     },
                        //     error: function(){
                            
                        //     }
                        // })
                    },
                    "Cancelar": function(){
                        $(this).dialog("close");
                    }
                },
                close: function(){
                    //caso o usuário simplesmente feche a caixa de edição não acontece nada.
                }
            }
    
            $("#modal").dialog(modalExcluir);
    
        }

})