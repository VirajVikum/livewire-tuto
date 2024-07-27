<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/app.css">
        @livewireStyles
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <a href="/" @class(['current'=> request()->is('/')])>Todos</a>
            <a href="/counter" @class(['current'=> request()->is('counter')])>Counter</a>
            {{-- <a href="/posts">Posts</a> --}}
            {{-- for load without page refreshing --}}
            <a wire:navigate href="/posts">Posts</a> 
            <a wire:navigate href="/create-posts">New Posts</a>
        </nav>

        {{ $slot }}

        
        @livewireScripts
        @livewire('livewire-ui-modal')
    </body>
</html>
 