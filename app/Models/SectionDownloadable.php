<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionDownloadable extends Model
{
    /** @use HasFactory<\Database\Factories\SectionDownloadableFactory> */
    use HasFactory;

    protected $fillable = [
        'sectionId',
        'downloadId',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'sectionId');
    }

    public function download()
    {
        return $this->belongsTo(Downloadable::class, 'downloadId');
    }
}
