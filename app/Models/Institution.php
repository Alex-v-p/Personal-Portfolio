<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'location',
        'logo',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
