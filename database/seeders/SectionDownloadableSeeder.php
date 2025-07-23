<?php

namespace Database\Seeders;

use App\Models\SectionDownloadable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionDownloadableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionDownloadable::create([
            'sectionId' => 1,
            'downloadId' => 1,
        ]);

        SectionDownloadable::create([
            'sectionId' => 2,
            'downloadId' => 2,
        ]);
    }
}
