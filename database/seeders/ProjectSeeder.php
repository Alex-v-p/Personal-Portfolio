<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Personal Portfolio Website',
            'imageLocation' => 'Projects/Project1/PortfolioHeadImage.jpg',
            'tinyDescription' => 'A full-stack portfolio site showcasing my projects, built with the TALL-stack.',
            'start_date' => '2025/03',
            'end_date' => '2025/04'
        ]);

        Project::create([
            'name' => 'IoT Security System',
            'imageLocation' => 'Projects/Project2/securitySystem.jpg',
            'projectZipLocation' => 'Projects/Project2/IOT-Final-TeamReport2024.pdf',
            'tinyDescription' => 'An AI-powered turret that uses computer vision to aim and fire a watergun at intruders, with a smoke screen for close-range defense.',
            'start_date' => '2024/07',
            'end_date' => '2024/05'
        ]);

        Project::create([
            'name' => 'Training Session Management System Analysis',
            'imageLocation' => 'Projects/Project3/useCaseDiagram.jpg',
            'projectZipLocation' => 'Projects/Project3/ManagementSystemAnalysis_Project.zip',
            'tinyDescription' => 'A collaborative workshop project focused on analyzing client needs and designing a training session management system.',
            'start_date' => '2024/10',
            'end_date' => '2024/12'
        ]);

        Project::create([
            'name' => 'Placement Prediction using Machine Learning',
            'imageLocation' => 'Projects/Project4/ModelComparison.jpg',
            'projectZipLocation' => 'Projects/Project4/ML_Project.zip',
            'tinyDescription' => 'A data-driven project predicting student job placement outcomes using machine learning, including analysis of education, experience, and specialization factors.',
            'featured' => true,
            'start_date' => '2025/02',
            'end_date' => '2025/03'
        ]);

        Project::create([
            'name' => 'International Exchange Student Portal',
            'imageLocation' => 'Projects/Project5/ExchangePortal.jpg',
            'tinyDescription' => 'An application to manage international student exchanges, created by merging the best ideas from multiple analyses and refined through iterative feedback with the client.',
            'start_date' => '2025/02',
            'end_date' => '2025/06',
        ]);

    }
}
