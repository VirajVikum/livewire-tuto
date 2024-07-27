<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Todos')]
class Todo extends Component
{
    public $todo='';
    public $todos = [];

    public function mount() //inetialize components
    {
        $this->todos=[
            'Take out trash',
            'Do dishes',
            'asd df'
        ];

        $this->todo="Type..";
    }

    public function updatedTodo($value) //runs when wire model calls
    {
        $this->todo = strtoupper($value);
    }
    
    public function add()
    {
        $this->todos[]=$this->todo;
        $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.todo');
    }
}
