<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $fillable = 
    ['titulo', 'numero', 'valorCausa', 'faseProcessual', 'cliente', 'reu', 'advogado', 'juiz', 'testemunha1',
    'testemunha2', 'testemunha3', 'dataInicio'];

}
