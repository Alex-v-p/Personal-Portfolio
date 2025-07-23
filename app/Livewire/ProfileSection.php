<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AboutMe;

class ProfileSection extends Component
{
    public $aboutMeItem;

    public function mount()
    {
        $this->aboutMeItem = AboutMe::first();
    }

    public function render()
    {
        return view('livewire.profile-section');
    }
}
