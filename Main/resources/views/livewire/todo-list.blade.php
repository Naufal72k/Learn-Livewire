<div class="p-4">
    <h2 class="text-xl font-bold mb-3">To-Do List 📝</h2>

    <ul class="list-disc pl-6">
        @foreach ($tasks as $task)
            <li>{{ $task['title'] }}
                @if ($task['done'])
                    ✅
                @else
                    ⌛
                @endif
            </li>
        @endforeach
    </ul>
</div>
