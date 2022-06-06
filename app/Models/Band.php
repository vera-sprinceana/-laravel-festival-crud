<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable=[
        'nome_gruppo', 'componenti_gruppo', 'genere',
         'canzone', 'codice_voto', 'nazionalità'
    ];
}
