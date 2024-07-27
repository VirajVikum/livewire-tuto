<div>
    <h2>Posts</h2>

    <table border="1">
        <thead>
            <th>Title</th>
            <th>Content</th>
            <th></th>
        </thead>
        @foreach ($posts as $post)
        <livewire:post-row : key="$post->id" :$post >
            {{-- <tr wire:key="{{$post->id}}">
                <td>{{$post->title}}</td>
                <td>{{str($post->content)->words(8)}}</td>
                <td>
                    <button type="button" wire:click="delete({{$post->id}})"
                        wire:confirm="Are You Sure To Delete This Post?"
                        >
                        Delete
                    </button>
                </td>
            </tr> --}}
        @endforeach
        
    </table>
</div>
 