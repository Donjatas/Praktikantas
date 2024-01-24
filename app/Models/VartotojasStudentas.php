<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class VartotojasStudentas extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'vartotojas_studentas';

    protected $fillable = [
        'vardas',
        'pavarde',
        'el_pastas',
        'slaptazodis',
        'telefono_numeris',
        'aukstoji_mokykla',
        'fakultetas',
        'specialybe',
        'kursas',
        'miestas',
    ];
}
