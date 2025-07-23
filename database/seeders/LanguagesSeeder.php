<?php

namespace Database\Seeders;

use App\Models\Languages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Languages::create([
            'name' => 'Dutch',
            'level' => 'Native',
        ]);

        Languages::create([
            'name' => 'English',
            'level' => 'C1',
        ]);

        Languages::create([
            'name' => 'Portuguese',
            'level' => 'Learning',
        ]);

    }
}
