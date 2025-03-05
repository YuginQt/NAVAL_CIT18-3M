<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-300 min-h-screen flex flex-col items-center py-10">
    <div class="w-full max-w-2xl p-6 bg-gray-800 shadow-lg rounded-xl">
        <h2 class="text-3xl font-bold text-center text-cyan-400 mb-6">Task Manager</h2>
        
        <form action="{{ route('tasks.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-400 font-medium">Title</label>
                <input type="text" name="title" class="w-full p-3 border border-gray-600 bg-gray-700 rounded-lg focus:ring-2 focus:ring-cyan-400" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-400 font-medium">Description</label>
                <textarea name="description" class="w-full p-3 border border-gray-600 bg-gray-700 rounded-lg focus:ring-2 focus:ring-cyan-400"></textarea>
            </div>
            <button type="submit" class="w-full bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 rounded-lg">Add Task</button>
        </form>
    </div>
    
    <div class="w-full max-w-2xl mt-6">
        <ul class="space-y-4">
            @foreach ($tasks as $task)
                <li class="bg-gray-800 shadow-md rounded-lg p-5 border border-gray-700 flex flex-col gap-3">
                    <div>
                        <h3 class="text-lg font-semibold text-cyan-300">{{ $task->title }}</h3>
                        <p class="text-gray-400">{{ $task->description }}</p>
                    </div>
                    
                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg">Edit</a>
                        
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
