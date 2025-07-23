<?php

namespace App\Livewire;

use App\Models\ContactMessage;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function save()
    {
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset('name', 'email', 'message');

        session()->flash('success', 'Message sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
