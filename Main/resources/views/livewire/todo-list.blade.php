<div class="p-4">
    <h2 class="text-xl font-bold mb-3">To-Do List 📝</h2>

    <form wire:submit ="addTask">
        <input type="text" wire:model="title" placeholder="Tulis task baru.....">
        <button type="submit">Tambah</button>
    </form>

    <ul class="list-disc pl-6">
        @foreach ($tasks as $task)
            <li>{{ $task->title }}
                @if ($task->done)
                    ✅
                @else
                    ⌛
                @endif
            </li>
        @endforeach
    </ul>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</div>
