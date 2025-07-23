<?php

namespace Database\Seeders;

use App\Models\SectionImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionImage::create([
            'sectionId' => 2,
            'imageId' => 1,
        ]);

        SectionImage::create([
            'sectionId' => 3,
            'imageId' => 2,
        ]);

        SectionImage::create([
            'sectionId' => 4,
            'imageId' => 3,
        ]);

        SectionImage::create([
            'sectionId' => 10,
            'imageId' => 6,
        ]);

        SectionImage::create([
            'sectionId' => 11,
            'imageId' => 7,
        ]);

        SectionImage::create([
            'sectionId' => 13,
            'imageId' => 5,
        ]);

        SectionImage::create([
            'sectionId' => 18,
            'imageId' => 8,
        ]);

        SectionImage::create([
            'sectionId' => 20,
            'imageId' => 9,
        ]);

        SectionImage::create([
            'sectionId' => 27,
            'imageId' => 10,
        ]);

        SectionImage::create([
            'sectionId' => 24,
            'imageId' => 11,
        ]);

        SectionImage::create([
            'sectionId' => 30,
            'imageId' => 12,
        ]);

        SectionImage::create([
            'sectionId' => 31,
            'imageId' => 1,
        ]);
    }
}
