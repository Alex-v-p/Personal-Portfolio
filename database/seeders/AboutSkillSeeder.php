<?php

namespace Database\Seeders;

use App\Models\AboutSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSkill::create([
            'aboutId' => 1,
            'skillId' => 1,
        ]);

        AboutSkill::create([
            'aboutId' => 1,
            'skillId' => 2,
        ]);
    }
}
