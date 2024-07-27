<div>
    <h2>New Posts</h2>
    <form wire:submit="save">
        <label for="">
            <span>Title</span>
            <input type="text" wire:model="title"><br>
            @error('title')
            <em>{{$message}}</em>
                
            @enderror
            <br>
        </label>
        <label for="">
            <span>Content</span>
            <textarea name="" id="" cols="30" rows="10" wire:model="content"></textarea><br>
            @error('content')
            <em>{{$message}}</em>
            @enderror
        </label>
        <br>
        <button type="submit">save</button>
    </form>
</div>
