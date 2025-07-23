<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionSkill extends Model
{
    /** @use HasFactory<\Database\Factories\SectionSkillFactory> */
    use HasFactory;

    protected $fillable = [
        'skillId',
        'sectionId',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skillId');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'sectionId');
    }
}
