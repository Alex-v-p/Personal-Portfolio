<?php
namespace App\Livewire;

use App\Models\AboutMe;
use App\Models\Course;
use App\Models\Languages;
use App\Models\Project;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{
    public $featuredProject;
    public $courses;
    public Collection $uniqueSkills;
    public $languages;
    public $description;
    public $showWelcomePopup = false;


    public function mount()
    {
        $this->featuredProject = Project::with(['sections.sectionSkills.skill'])->where('featured', true)->first();
        $this->courses = Course::with(['courseSkills.skill', 'institution'])
            ->inRandomOrder()
            ->take(2)
            ->get();
        $this->languages = Languages::all();

        $aboutmeItem = AboutMe::first();
        $this->description = $aboutmeItem['description'];

        $this->uniqueSkills = $this->extractUniqueSkills($this->featuredProject);

        if (!request()->cookie('visited_homepage')) {
            $this->showWelcomePopup = true;
            // Set the cookie in the response
            cookie()->queue(cookie('visited_homepage', true, 30));
        }
    }

    private function extractUniqueSkills($project): Collection
    {
        $skills = collect();

        foreach ($project->sections as $section) {
            foreach ($section->sectionSkills as $sectionSkill) {
                $skill = $sectionSkill->skill;
                if ($skill && !$skills->contains('id', $skill->id)) {
                    $skills->push($skill);
                }
            }
        }

        return $skills;
    }

    #[Layout('layouts.e-portfolio-layout')]
    public function render()
    {
        return view('livewire.home-page');
    }
}
