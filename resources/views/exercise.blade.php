<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym Log</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-slate-800">My Gym Log</h1>
            <a href="{{ route('exercise.form') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Add Exercise</a>
        </div>

        <div class="overflow-x-auto">
            @if (@session('success'))
               <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
               </div> 
            @endif
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-100">
                        <th class="p-3 border text-center">Exercise</th>
                        <th class="p-3 border text-center">Weight (kg)</th>
                        <th class="p-3 border text-center">Reps</th>
                        <th class="p-3 border text-center">Notes</th>
                        <th class="p-3 border text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $Alldata as $data )
                    <tr class="border-b">
                        <td class="p-3 border">{{ $data->name }}</td>
                        <td class="p-3 border">{{ $data->weight }}</td>
                        <td class="p-3 border">{{ $data->reps }}</td>
                        <td class="p-3 border">{{ $data->notes }}</td>
                        <td class="p-3 border text-center">
                            <form action="{{ route('exercise.destroy', $data->id) }}" method="POST">
                            <a href="{{ route('exercise.edit', $data->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-600 hover:underline"
                                        onclick="return confirm('Yakin mau hapus latihan ini?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>