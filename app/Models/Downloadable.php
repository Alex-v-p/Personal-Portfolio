<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downloadable extends Model
{
    /** @use HasFactory<\Database\Factories\DownloadableFactory> */
    use HasFactory;

    protected $fillable = [
        'location',
        'type',
    ];
}
