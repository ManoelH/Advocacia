var nome;

function linha() {
    var tr = $('table tr');
    tr.on('click', function () {
        var self = this;
        tr.each(function () {
            if (this == self) $(this).toggleClass('colorir');
            else
            {
                this.nome = undefined; // depois ver o bug que quando desmarcar a linha, a variavel id ainda 
                                    //fica com o valor 
                $(this).removeClass('colorir');
            } 
        })
    });
}

function setNome(nomeDono)
{
    this.nome = nomeDono;
}

function selecionarDono() {
    $('#idNomeDono').val(nome);
    $('#nomeDonoModal').modal('hide')
}