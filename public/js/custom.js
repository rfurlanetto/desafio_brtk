$('#cpf').mask('999.999.999-99');

$(document).ready( function () {
    $('#table-user').DataTable({ 
        "bFilter": false, 
        "oLanguage": {
            "sInfo": "_START_ - _END_ /_TOTAL_",
            "sInfoEmpty": "Tabela vazia",
            "sSearch" : "Pesquisar",
            "sInfoFiltered" : ""
        },
        "bLengthChange" : false,
        "language": {
            "paginate": {
              "previous": "Anterior",
              "next": "Próximo"
            }
          }
    });

    $('#form-modal').modal();
} );

$('#form-add-user').submit(function(e){
    e.preventDefault();

    if ($('#name').val().length <= 0) {
        alert('Preencha o campo NAME');
        $('#name').focus();
        return false;
    }

    if ($('#cpf').val().length <= 0) {
        alert('Preencha o campo CPF');
        $('#cpf').focus();
        return false;
    }

    if ($('#email').val().length <= 0) {
        alert('Preencha o campo E-MAIL');
        $('#email').focus();
        return false;
    }

    $('#form-add-user')[0].submit();

});

$('.delete').click(function(){
    if (!confirm(`Tem certeza que deseja excluir este registro?`)) {
        return false;
    }
});