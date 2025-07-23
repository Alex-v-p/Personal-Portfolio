<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Images::create([
            'imageLocation' => 'Projects/Project1/tallStack.jpg',
            'imageDescription' => 'The tall stack.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project1/VirtualMachine.jpg',
            'imageDescription' => 'Virtual Machine where the project is hosted.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project1/FigmaDesign.jpg',
            'imageDescription' => 'Figma design of the project.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project2/securitySystem.jpg',
            'imageDescription' => 'Picture of the project.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project2/securitySystemFlyer.png',
            'imageDescription' => 'Picture of the flyer.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project2/IotBottom3d.jpg',
            'imageDescription' => 'Picture of the 3d moddel of the bottom in freeCAD',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project2/IotDiagram.png',
            'imageDescription' => 'Hardware Diagram of the project',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project3/useCaseDiagram.jpg',
            'imageDescription' => 'UseCase Diagram we designed for the client.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project3/FigmaLST2.jpg',
            'imageDescription' => 'Picture of part of the figma prototype of the analyzed project.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project4/ModelComparison.jpg',
            'imageDescription' => 'Graph of the models we created.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project4/DataGraphAnalysis.jpg',
            'imageDescription' => 'Example of the some the graphs created for the analysis.',
        ]);

        Images::create([
            'imageLocation' => 'Projects/Project5/JiraThings.jpg',
            'imageDescription' => 'Example of a part of the remaining Jira tasks.',
        ]);
    }
}
