<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    /** @use HasFactory<\Database\Factories\LanguagesFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
    ];
}
