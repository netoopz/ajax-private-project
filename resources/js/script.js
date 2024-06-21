let paginaAtual = document.getElementsByClassName('botao-menu');


let caminho = "";

function carregarPagina(pagina) {
    switch (pagina) {
        case 'pessoa':
           caminho = 'viewer/pessoa/pessoas.html'
        break;
        case 'contato':
               caminho = 'viewer/pessoa/contato.html'
        break;
        case 'sobre-nos':
           caminho = 'viewer/pessoa/sobre-nos.html'
        break;
    }
    $.ajax({
             url: caminho,
            success: function(data) {
            $('#container').html(data);
            }
            });  
   console.log(caminho);
}



// function salvar(model) {

//     $('#form-'+model).serialize();
//     $.ajax({
//         url: caminho,
//        success: function(data) {
//        $('#container').html(data);
//        }
//        });  
// }
