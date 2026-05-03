<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-xl font-bold mb-4">Add New Exercise</h1>
        
        <form action="{{ route('exercise.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Exercise Name</label>
                <input type="text" name="name" class="w-full border rounded p-2" placeholder="e.g. Bench Press">
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Weight (kg)</label>
                    <input type="number" name="weight" class="w-full border rounded p-2">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Reps</label>
                    <input type="number" name="reps" class="w-full border rounded p-2">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Notes</label>
                <textarea name="notes" class="w-full border rounded p-2"></textarea>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">Save Workout</button>
        </form>
        <a href="{{ route('exercise.index') }}" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Back To Workout</a>
    </div>
</body>
</html>