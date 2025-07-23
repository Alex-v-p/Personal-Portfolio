<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProjectDetails extends Component
{
    public $projectId;


    public function mount($projectId = null)
    {
        $this->projectId = $projectId;
    }

    #[Layout('layouts.e-portfolio-layout')]
    public function render()
    {
        $project = Project::with([
            'sections.sectionSkills.skill',
            'sections.sectionImages.image'
        ])->findOrFail($this->projectId);

        return view('livewire.project-details', [
            'project' => $project,
        ]);
    }
}
