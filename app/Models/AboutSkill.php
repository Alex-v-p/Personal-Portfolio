<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSkill extends Model
{
    /** @use HasFactory<\Database\Factories\AboutSkillFactory> */
    use HasFactory;

    protected $fillable = [
        'aboutId',
        'skillId',
    ];

    public function about()
    {
        return $this->belongsTo(AboutMe::class, 'aboutId');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skillId');
    }
}
