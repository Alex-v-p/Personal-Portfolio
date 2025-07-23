<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'projectId',
        'sectionOrder',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'projectId');
    }

    public function sectionSkills()
    {
        return $this->hasMany(SectionSkill::class, 'sectionId');
    }

    public function sectionImages()
    {
        return $this->hasMany(SectionImage::class, 'sectionId');
    }

}
