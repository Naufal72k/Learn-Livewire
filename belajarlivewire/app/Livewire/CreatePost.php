<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use function Laravel\Prompts\alert;

class CreatePost extends Component
{
    public $todos = [
        'Take out trash',
        'Do dishes',
    ];
    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;

        // $this->todo = '';
        $this->reset('todo');
    }


    public function render()
    {
        return view('livewire.create-post');
    }
}
