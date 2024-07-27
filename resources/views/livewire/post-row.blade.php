<tr @class(['archived'=> $post->is_archived])>
    <td>{{$post->title}}</td>
    <td>{{str($post->content)->words(8)}}</td>
    <td>
        <button type="button" wire:click="archive({{$post->id}})"
            wire:confirm="Are You Sure To Archive This Post?"
            >
            Archive
        </button>
        <button type="button" wire:click="$parent.delete({{$post->id}})"
            wire:confirm="Are You Sure To Delete This Post?"
            >
            Delete
        </button>
        <button type="button" onclick="Livewire.dispatch('openModal', { component: 'edit-post' })">
            Update
        </button>
        
        <button wire:click="$dispatch('openModal', { component: 'edit-post' })">Edit Post</button>
    </td>
</tr>