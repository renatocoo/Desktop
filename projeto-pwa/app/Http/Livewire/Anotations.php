<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Anotations extends Component
{
    public $note = '';
    public $savedNotes = [];

    public function saveNote()
    {
        $this->savedNotes[] = $this->note;
        $this->note = '';
    }

    public function render()
    {
        return view('livewire.anotations');
    }
}

