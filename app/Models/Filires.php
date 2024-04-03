<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filires extends Model
{
    use HasFactory;
    protected $fillable = [
        'pole',
        'name_filire',
        'niveau',
    ];
}
