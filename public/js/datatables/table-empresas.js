
/*console.log(ruta_server.value + '/empresas-ajax');
$.ajax({
    url: ruta_server.value + '/empresas-ajax',
    success: function (respuesta) {
        console.log('respuesta', respuesta);
    },
    error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus + " " + errorThrown);
    }

});*/

var tablaPosts = $("#table-empresas-sefeco").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: 'http://devjobs.dev.com/administrador/empresas-ajax'
    },
    columns: [
        { data: 'id'},
        { data: 'name'},
        { data: 'email'}
    ]

});
