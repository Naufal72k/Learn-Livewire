<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Post;
use PhpParser\Node\Expr\FuncCall;
use function Laravel\Prompts\alert;

#[Title("Todos")]
class CreatePost extends Component
{
    public $todo = '';
    public $todos = [
        'Take out trash',
        'Do dishes',
    ];
    public function mount()
    {

    }


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
