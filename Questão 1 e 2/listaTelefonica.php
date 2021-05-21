<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listaTelefonica extends Model
{    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'ddd', 'numero'
    ];
}
