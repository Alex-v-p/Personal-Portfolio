<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        $this->call([
            InstitutionSeeder::class,
            CourseSeeder::class,
            SkillSeeder::class,
            CourseSkillsSeeder::class,
            DownloadableSeeder::class,
            AboutMeSeeder::class,
            AboutSkillSeeder::class,
            ProjectSeeder::class,
            SectionSeeder::class,
            SectionSkillSeeder::class,
            SectionDownloadableSeeder::class,
            ImagesSeeder::class,
            SectionImageSeeder::class,
            LanguagesSeeder::class,
        ]);
    }
}
