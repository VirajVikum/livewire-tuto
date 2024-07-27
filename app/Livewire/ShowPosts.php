<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class ShowPosts extends Component
{
    public function delete($postId)
    {
        Post::find($postId)->delete();
    }

    public function render()
    {
        return view('livewire.show-posts',['posts'=>Post::all()]); 
    }
}
