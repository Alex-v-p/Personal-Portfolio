<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSkills extends Model
{
    /** @use HasFactory<\Database\Factories\CourseSkillsFactory> */
    use HasFactory;

    protected $fillable = [
        'courseId',
        'skillId',
        'institution_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'courseId');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skillId');
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
