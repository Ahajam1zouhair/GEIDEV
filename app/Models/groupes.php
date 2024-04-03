<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupes extends Model
{
    use HasFactory;
    protected $fillable  = [
        "name_groupes",
        "filiere_id",
    ];

    public function filiere_Groupe()
    {
        return $this->belongsTo(Filires::class, 'filiere_id');
    }
}
