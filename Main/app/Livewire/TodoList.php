<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $tasks = [
        ['id' => 1, 'title' => 'Belajar Livewire' , 'done' => false],
        ['id' => 2, 'title' => 'Ngoding To-do list' , 'done' => true],
        ['id' => 3, 'title' => 'ngopi dulu' , 'done' => false]
    ];
    public function render()
    {

        return view('livewire.todo-list');
    }
}
