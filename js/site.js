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

                    },
                    "Cancelar": function(){
                        $(this).dialog("close");
                    }
                },
                close: function(){
                    
                }
            }
    
            $("#modal").dialog(modalExcluir);
    
        }

})