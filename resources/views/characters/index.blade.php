@extends('characters.layout')

@section('title', 'List all characters')

@section('content')


<div class="container mx-auto">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl">List of Items</h2>
        <div class="mt-4">
            <a href="{{ route('characters.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Registrar Personaje</a>
        </div>
    </div>
    
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Clase
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Especializacion
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Rol
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Core
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($characters as $character)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $character->name }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $character->class }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $character->spec }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $character->role }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $character->core }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <form action="{{ route ('characters.destroy', $character->id) }}" method="POST">
                        <a href="{{ route('characters.show', $character->id) }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-blue-600">Show</a>
                        <a href="{{ route('characters.edit', $character->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-blue-600">Delete</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
    </table>
</div>
@endsection