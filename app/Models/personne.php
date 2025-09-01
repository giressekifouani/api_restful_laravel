<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personne extends Model
{
    use HasFactory;
    protected $table = 'personnes';
    protected $fillable = [
        'prenom',
        'nom',
        'sexe',
        'nationalite',
        'adresse',
        'telephone',
        'email',
    ] ;
}
