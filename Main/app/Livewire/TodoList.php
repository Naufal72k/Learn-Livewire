<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TodoList extends Component
{
    public $tasks;
    public $title;

    public function mount(){
        $this->tasks = Task::all();
    }

    public function addTask(){
        $this->validate([
            'title' => 'required|min:3'
        ]);

        Task::create([
            'title' => $this->title,
            'done' => false


        ]);

        $this->title = ' ';
        $this->tasks = Task::all();
    }

    public function deleteTask($index){
        Task::find($index)->delete();

        $this->tasks = Task::all();
    }
    public function render()
    {

        return view('livewire.todo-list');
    }
}
