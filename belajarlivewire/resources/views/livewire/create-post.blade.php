<div>
    {{-- <input type="text" wire:model="todo">
    <button type="button" wire:click="add">Add</button> --}}

    <form wire:submit='add'>
        <input type="text" wire:model.live.debounce="todo">
        <button type="submit">Add</button>

        <span>Current todo: {{ $todo }}</span>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
