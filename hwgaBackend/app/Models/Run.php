<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Run extends Model
{

    use HasFactory;

    protected $fillable = [
        'date_time',
        'key_level',
        'spots',
        'open_roles',
        'taken_roles',
    ];
}
