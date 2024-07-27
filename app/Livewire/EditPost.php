<?php

namespace App\Livewire;


use LivewireUI\Modal\ModalComponent;

class EditPost extends ModalComponent
{
    public function render()
    {
        return view('livewire.edit-post');
    }
}
