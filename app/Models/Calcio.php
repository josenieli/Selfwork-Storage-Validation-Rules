<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calcio extends Model
{
    protected $fillable =[
        'titolo', 'marcatori', 'giornata', 'riassunto'
    ];
}
