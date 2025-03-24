$(document).ready(function() {
    $('#table_id').DataTable(
        {
    "language": {
        "sProcessing":    "Procesando",
        "sLengthMenu":    "Mostrar _MENU_ registros de times",
        "sZeroRecords":   "Sem registros",
        "sEmptyTable":    "Sem registros de times na tabela",
        "sInfo":          "Mostrando  de _START_ até _END_ de um total de _TOTAL_ times registrados",
        "sInfoEmpty":     "Mostrando registros de 0 até 0 de um total de 0 times",
        "sInfoFiltered":  "(filtrado de um total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar Time:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Carregando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Prox",
            "sPrevious": "Ant"
        },
        "oAria": {
            "sSortAscending":  ": Ativar para ordenar a coluna de maneira ascendente",
            "sSortDescending": ": Ativar para ordenar a coluna de maneira descendente"
        }
    }
}
    );
});