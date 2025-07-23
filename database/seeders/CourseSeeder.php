<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutions = Institution::all();

        if ($institutions->isEmpty()) {
            $this->command->warn('No institutions found. Please seed institutions first.');
            return;
        }

        Course::insert([
            [
                'title' => 'Cloud & DevOps',
                'description' => 'Learn to deploy and manage applications in the cloud using containerization and CI/CD pipelines.',
                'start_date' => '2023/09',
                'end_date' => '2024/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Communication Skills 1',
                'description' => 'Develop fundamental verbal and written communication strategies for academic and professional settings.',
                'start_date' => '2023/09',
                'end_date' => '2024/07',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Data Essentials',
                'description' => 'Gain a solid foundation in data handling, including collection, cleaning, and basic analysis techniques.',
                'start_date' => '2023/09',
                'end_date' => '2024/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Full stack Essentials',
                'description' => 'Understand both front-end and back-end development basics, building end-to-end web applications.',
                'start_date' => '2024/01',
                'end_date' => '2024/07',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Iot Essentials',
                'description' => 'Explore Internet of Things architectures and build simple connected devices and sensor networks.',
                'start_date' => '2024/01',
                'end_date' => '2024/07',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Networking Essentials',
                'description' => 'Learn core networking concepts like TCP/IP, routing, switching, and network troubleshooting.',
                'start_date' => '2024/01',
                'end_date' => '2024/07',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'OO Development',
                'description' => 'Master object-oriented programming principles and design patterns for scalable software.',
                'start_date' => '2024/01',
                'end_date' => '2024/07',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Operating Systems',
                'description' => 'Study the design and functionality of modern operating systems, including multiple Linux distros and windows server.',
                'start_date' => '2023/09',
                'end_date' => '2024/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Programming Essentials',
                'description' => 'Get comfortable with programming fundamentals, control structures, and problem-solving.',
                'start_date' => '2023/09',
                'end_date' => '2024/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Security Essentials',
                'description' => 'Introduction to cybersecurity principles, threats, and defensive strategies to protect digital assets.',
                'start_date' => '2024/01',
                'end_date' => '2024/07',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Webdesign Essentials',
                'description' => 'Learn HTML, CSS, and UX/UI principles for crafting responsive and accessible web designs.',
                'start_date' => '2023/07',
                'end_date' => '2024/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Software Modeling and Design',
                'description' => 'Apply modeling techniques like UML to plan and document robust software architectures.',
                'start_date' => '2024/07',
                'end_date' => '2025/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Digital Entrepreneurship',
                'description' => 'Explore the intersection of technology and business to launch and manage digital ventures.',
                'start_date' => '2024/07',
                'end_date' => '2025/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => '.NET Development',
                'description' => 'Build web and desktop applications using the .NET framework and C# language.',
                'start_date' => '2025/01',
                'end_date' => '2025/07',
                'status' => 'onGoing',
                'institution_id' => 1,
            ],
            [
                'title' => 'Artificial Intelligence',
                'description' => 'Discover AI concepts, from machine learning algorithms to neural networks and real-world applications.',
                'start_date' => '2025/01',
                'end_date' => '2025/07',
                'status' => 'onGoing',
                'institution_id' => 1,
            ],
            [
                'title' => 'Business Processes & ITL',
                'description' => 'Analyze and optimize business workflows with ITIL practices and process management tools.',
                'start_date' => '2025/01',
                'end_date' => '2025/07',
                'status' => 'onGoing',
                'institution_id' => 1,
            ],
            [
                'title' => 'Communication Skills 2',
                'description' => 'Advance your communication abilities with presentations, negotiations, and intercultural competence.',
                'start_date' => '2024/09',
                'end_date' => '2025/07',
                'status' => 'onGoing',
                'institution_id' => 1,
            ],
            [
                'title' => 'Data Science',
                'description' => 'Dive deeper into statistical analysis, machine learning, and data-driven decision-making.',
                'start_date' => '2024/09',
                'end_date' => '2025/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],
            [
                'title' => 'Data Visualization',
                'description' => 'Learn to create effective charts and dashboards to communicate datainsights clearly.',
                'start_date' => '2025/01',
                'end_date' => '2025/07',
                'status' => 'onGoing',
                'institution_id' => 1,
            ],
            [
                'title' => 'Java Development',
                'description' => 'Develop robust Java applications and understand core concepts like OOP and exception handling.',
                'start_date' => '2025/01',
                'end_date' => '2025/07',
                'status' => 'onGoing',
                'institution_id' => 1,
            ],
            [
                'title' => 'Web Development',
                'description' => 'Build dynamic, database-driven web applications using modern frameworks and best practices.',
                'start_date' => '2024/09',
                'end_date' => '2025/01',
                'status' => 'complete',
                'institution_id' => 1,
            ],

            [
                'title' => 'Programming Basics Development',
                'description' => 'Gained a strong foundation in programming concepts such as variables, loops, functions, and data structures. Focused on writing clean, logical code and solving problems using languages like Python and Java.',
                'start_date' => '2022/09',
                'end_date' => '2023/07',
                'status' => 'complete',
                'institution_id' => 2,
            ],
            [
                'title' => 'Web App Basics',
                'description' => 'Learned the fundamentals of web development, including HTML, CSS, JavaScript, and basic backend principles. Built simple web applications and gained hands-on experience with client-server interactions and responsive design.',
                'start_date' => '2022/09',
                'end_date' => '2023/07',
                'status' => 'complete',
                'institution_id' => 2,
            ],

        ]);
    }
}
