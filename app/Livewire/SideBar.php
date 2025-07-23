<?php

namespace App\Livewire;

use App\Models\AboutMe;
use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SideBar extends Component
{
    public $featuredLink;
    public $CV;

    public function mount()
    {
        $this->featuredLink = Project::with(['sections.sectionSkills.skill'])->where('featured', true)->first();
        $aboutMeItem = AboutMe::with(['downloadable'])->first();
        $this->CV = $aboutMeItem['downloadable'];
    }

    #[Layout('layouts.e-portfolio-layout')]
    public function render()
    {
        return view('livewire.side-bar');
    }
}
