<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Skill;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

class MyCoursesPage extends Component
{
    public Collection $skills;
    public string $search = '';
    public string $skillFilter = '';

    public function mount()
    {
        $this->skills = Skill::whereHas('courseSkills.course')->get();
    }

    #[Layout('layouts.e-portfolio-layout')]
    public function render()
    {
        $filteredCourses = Course::with(['courseSkills.skill', 'institution'])
            ->when($this->search, function ($query) {
                // Filter based on search (title, institution, or skill)
                $query->where(function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')
                        ->orWhereHas('courseSkills.skill', function ($q3) {
                            $q3->where('name', 'like', '%' . $this->search . '%');
                        });
                });
            })
            ->when($this->skillFilter, function ($query) {
                // Filter based on selected skill filter
                $query->whereHas('courseSkills.skill', function ($q) {
                    $q->where('name', $this->skillFilter);
                });
            })
            // Sorting based on the end_date, descending (most recent first)
            ->orderBy('end_date', 'desc')
            ->get();

        return view('livewire.my-courses-page', [
            'courses' => $filteredCourses,
            'skills' => $this->skills,
            'search' => $this->search,
            'skillFilter' => $this->skillFilter,
        ]);
    }

}
