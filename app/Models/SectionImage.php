<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionImage extends Model
{
    /** @use HasFactory<\Database\Factories\SectionImageFactory> */
    use HasFactory;

    protected $fillable = [
        'sectionId',
        'imageId',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'sectionId');
    }

    public function image()
    {
        return $this->belongsTo(Images::class, 'imageId');
    }
}
