<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    
    #[Rule('required',message:'yoooo, fill the field')]
    #[Rule('min:4',message:'Too short bro..')]
    public $title='';

    #[Rule('required',as:'description')]
    public $content='';

    public function save()
    {
        $this->validate();

        // $this->validate([
        //     'title'=>'required',
        //     'content'=>'required',
        // ]);  
        // this can done using rules

        Post::create([
            'title'=>$this->title,
            'content'=>$this->content,
        ]);
        // $this->redirect('/posts');
        $this->redirect('/posts', navigate:true);  //for load without page refresh
    }

    public function render()
    { 
        return view('livewire.create-post');
    }
}
