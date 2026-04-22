<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    protected $fillable =[
        'titolo', 'marcatori', 'giornata', 'riassunto', 'img'
    ];
}
