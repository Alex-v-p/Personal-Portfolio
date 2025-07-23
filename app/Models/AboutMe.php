<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    /** @use HasFactory<\Database\Factories\AboutMeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'occupation',
        'displayEmail',
        'displayLinkedIn',
        'displayPhone',
        'cvDownload',
        'imageLocation',
    ];

    public function downloadable()
    {
        return $this->belongsTo(Downloadable::class, 'cvDownload');
    }
}
