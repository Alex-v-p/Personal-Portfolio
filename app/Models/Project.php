<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'name',
        'imageLocation',
    ];


    public function sections()
    {
        return $this->hasMany(Section::class, 'projectId');
    }

    public function skills()
    {
        return $this->hasManyThrough(
            Skill::class,
            SectionSkill::class,
            'sectionId',
            'id',
            'id',
            'skillId'
        )->join('sections', 'sections.id', '=', 'section_skills.sectionId')
            ->whereColumn('sections.projectId', 'projects.id');
    }
}
