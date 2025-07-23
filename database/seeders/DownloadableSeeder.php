<?php

namespace Database\Seeders;

use App\Models\Downloadable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DownloadableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Downloadable::create([
            'location' => 'storage/CV/vanPoppel_Alex_CV.pdf',
            'type' => 'pdf',
        ]);

        Downloadable::create([
            'location' => 'storage/project-doc.doc',
            'type' => 'doc',
        ]);

        Downloadable::create([
            'location' => 'storage/images/design.zip',
            'type' => 'zip',
        ]);

        Downloadable::create([
            'location' => 'storage/images/avatar.png',
            'type' => 'image',
        ]);
    }
}
