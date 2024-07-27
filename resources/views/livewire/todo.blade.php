<div>
    


    <form wire:submit='add'>
    <input type="text" wire:model.live.debounce.2500ms='todo'> <!-- print live after 2500ms -->
    {{-- <input type="text" wire:model.changed='todo'> <!-- print live when send next req   -->    blur for after click other place --}}
    
    <span>Current todo : {{$todo}}</span>
    <button type="submit">add</button> 
    <ul>
        @foreach ($todos as $todo)
        <li>{{$todo}}</li>
        @endforeach
    </ul>
    </form>

    <input type="text" wire:model='todo'>
    <button type="button" wire:click='add'>add</button>
    <ul>
        @foreach ($todos as $todo)
        <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>