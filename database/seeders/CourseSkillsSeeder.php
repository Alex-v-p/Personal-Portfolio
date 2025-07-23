<?php

namespace Database\Seeders;

use App\Models\CourseSkills;
use Illuminate\Database\Seeder;

class CourseSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourseSkills::insert([
            // 1. Cloud & DevOps
            ['courseId' => 1, 'skillId' => 23, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 1, 'skillId' => 24, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 1, 'skillId' => 25, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 2. Communication Skills
            ['courseId' => 2, 'skillId' => 47, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 2, 'skillId' => 48, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 2, 'skillId' => 49, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 2, 'skillId' => 50, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 2, 'skillId' => 51, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 2, 'skillId' => 52, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 3. Data Essentials
            ['courseId' => 3, 'skillId' => 40, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 3, 'skillId' => 41, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 3, 'skillId' => 42, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 4. Fullstack Essentials
            ['courseId' => 4, 'skillId' => 1, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 4, 'skillId' => 3, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 4, 'skillId' => 4, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 4, 'skillId' => 11, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 4, 'skillId' => 23, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 5. Iot Essentials
            ['courseId' => 5, 'skillId' => 8, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 5, 'skillId' => 12, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 5, 'skillId' => 21, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 5, 'skillId' => 27, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 5, 'skillId' => 26, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 6. Networking Essentials
            ['courseId' => 6, 'skillId' => 22, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 7. OO Development
            ['courseId' => 7, 'skillId' => 10, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 7, 'skillId' => 18, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 8. Operating Systems
            ['courseId' => 8, 'skillId' => 43, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 8, 'skillId' => 44, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 8, 'skillId' => 45, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 9. Programming Essentials
            ['courseId' => 9, 'skillId' => 8, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 10. Security Essentials
            ['courseId' => 10, 'skillId' => 28, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 10, 'skillId' => 29, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 11. WebDesign Essentials
            ['courseId' => 11, 'skillId' => 1, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 11, 'skillId' => 2, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 11, 'skillId' => 23, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 11, 'skillId' => 30, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 12. Software Modeling
            ['courseId' => 12, 'skillId' => 31, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 12, 'skillId' => 32, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 12, 'skillId' => 46, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 13. Digital EntrepeneurShip
            ['courseId' => 13, 'skillId' => 33, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 13, 'skillId' => 34, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 14. .NET
            ['courseId' => 14, 'skillId' => 9, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 14, 'skillId' => 35, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 15. Artificial Intelligence
            ['courseId' => 15, 'skillId' => 8, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 15, 'skillId' => 17, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 15, 'skillId' => 36, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 15, 'skillId' => 37, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 16. Business Essentials
            ['courseId' => 16, 'skillId' => 38, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 17. Communication Skills 2
            ['courseId' => 17, 'skillId' => 53, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 17, 'skillId' => 54, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 17, 'skillId' => 55, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 17, 'skillId' => 56, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 17, 'skillId' => 57, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 18. Data Science
            ['courseId' => 18, 'skillId' => 8, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 18, 'skillId' => 15, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 18, 'skillId' => 16, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 19. Data Visualisation
            ['courseId' => 19, 'skillId' => 20, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 20. Data Visualisation
            ['courseId' => 20, 'skillId' => 10, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 20, 'skillId' => 18, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 20, 'skillId' => 19, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 21. Web Development
            ['courseId' => 21, 'skillId' => 1, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 21, 'skillId' => 6, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 21, 'skillId' => 7, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 21, 'skillId' => 13, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 21, 'skillId' => 14, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 21, 'skillId' => 23, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 21, 'skillId' => 39, 'institution_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // 22. Programming basics
            ['courseId' => 22, 'skillId' => 8, 'institution_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // 23. WebApp basics
            ['courseId' => 23, 'skillId' => 1, 'institution_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 23, 'skillId' => 2, 'institution_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 23, 'skillId' => 3, 'institution_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 23, 'skillId' => 4, 'institution_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 23, 'skillId' => 7, 'institution_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['courseId' => 23, 'skillId' => 40, 'institution_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
