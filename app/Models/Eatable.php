<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eatable extends Model
{
    use HasFactory;

    protected $fillable = [
        'catId',
        'eatableName',
        'eatableImage',
        'description',
        'status'
    ];
}
