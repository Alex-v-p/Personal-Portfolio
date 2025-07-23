<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

class MyProjectsPage extends Component
{
    public string $search = '';
    public string $skillFilter = '';
    public Collection $skills;

    public function mount()
    {
        $this->skills = Skill::whereHas('sectionSkills.section.project')->get();
    }

    #[Layout('layouts.e-portfolio-layout')]
    public function render()
    {
        $projects = Project::with(['sections.sectionSkills.skill'])
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->skillFilter, function ($query) {
                $query->whereHas('sections.sectionSkills.skill', function ($q) {
                    $q->where('name', $this->skillFilter);
                });
            })
            ->get();

        return view('livewire.my-projects-page', [
            'projects' => $projects,
            'skills' => $this->skills,
        ]);
    }
}
