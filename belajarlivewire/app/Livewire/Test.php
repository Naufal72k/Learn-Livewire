<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Test extends Component
{
    #[Title('Test')]
    public $name = "nopal";

    public function mount($nama)
    {
        $this->name = $nama;
    }
    public function render()
    {
        return view('livewire.test');
    }
}
