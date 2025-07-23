<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'description',
    ];

    public function sectionSkills()
    {
        return $this->hasMany(SectionSkill::class, 'skillId');
    }

    public function courseSkills()
    {
        return $this->hasMany(CourseSkills::class, 'skillId');
    }
}

