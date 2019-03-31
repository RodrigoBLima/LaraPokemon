<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

    // necessaria para atualizar os dados do usuario
    protected $fillable = ['name', 'avatar'];

    //funcao para tirar o id e colocar o slug melhorando a seguranca
    public function getRouteKeyName()
    {

        return 'slug';

    }

}
