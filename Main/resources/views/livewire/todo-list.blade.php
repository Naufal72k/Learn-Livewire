<div class="p-4">
    <h2 class="text-xl font-bold mb-3">To-Do List 📝</h2>

    <form wire:submit ="addTask">
        <input type="text" wire:model="title" placeholder="Tulis task baru.....">
        <button type="submit">Tambah</button>
    </form>

    <ul class="space-y-2">
        @foreach ($tasks as $task)
            <li class="flex justify-between items-center bg-gray-100 p-2 rounded">
                <span>{{ $task->title }}</span>
                <button wire:click="deleteTask({{ $task->id }})"
                    class=" bg-red-500 text-white px-2 py-1 rounded text-sm">delete</button>
            </li>
        @endforeach

    </ul>
</div>
