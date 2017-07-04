<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    protected $fillable = ['apresentador','titulo','palavras_chave','membros_banca','horario','resumo'];
}
