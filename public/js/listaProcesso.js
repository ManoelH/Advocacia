window.onload = function()
{
$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var rTitulo = button.data('titulo')
    var rNumero = button.data('numero')
    var rValorCausa = button.data('valorCausa')
    var rFaseProcessual = button.data('faseProcessual')
    var rCliente = button.data('cliente')
    var rReu = button.data('reu')
    var rAdvogado = button.data('advogado')
    var rJuiz = button.data('juiz')
    var rTestemunha1 = button.data('testemunha1')
    var rTestemunha2 = button.data('testemunha2')
    var rTestemunha3 = button.data('testemunha3')
    var rDataInicio = button.data('dataInicio') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#modal-title').text('Editar processo: ' + rTitulo)
    modal.find('#id-titulo').val(rTitulo)
    modal.find('#id-numero').val(rNumero)
    modal.find('#id-valorCausa').val(rValorCausa)
    modal.find('#id-faseProcessual').val(rFaseProcessual)
    modal.find('#id-cliente').val(rCliente)
    modal.find('#id-reu').val(rReu)
    modal.find('#id-advogado').val(rAdvogado)
    modal.find('#id-juiz').val(rJuiz)
    modal.find('#id-testemunha1').val(rTestemunha1)
    modal.find('#id-testemunha2').val(rTestemunha2)
    modal.find('#id-testemunha3').val(rTestemunha3)
    modal.find('#id-dataInicio').val(rDataInicio)
    })
}