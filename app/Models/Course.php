<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'status',
        'institution_id',
    ];

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function courseSkills()
    {
        return $this->hasMany(CourseSkills::class, 'courseId');
    }
}
