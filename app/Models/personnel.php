<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personnel extends Model
{
    protected $fillables = [
        'personne_id',
        'poste',
        'service',
        'identification',
    ] ;
}
