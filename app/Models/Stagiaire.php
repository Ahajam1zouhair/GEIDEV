<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'civilite',
        'cin',
        'nom',
        'prenom',
        'statut',
        'filiere',
        'groupe',
        'tel',
        'date_naissance',
        'type_stag',
        'niveau',
        'commentaire',
        'email',
    ];

}
