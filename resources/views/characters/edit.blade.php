@extends('characters.layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="max-w-md bg-red-400 rounded p-8 shadow-md">
    <form method="POST" action="{{ route('characters.update', $character->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
            <input type="text" id="name" name="name" value="{{ $character->name }}" class="form-input rounded-md shadow-sm w-full" placeholder=" Nombre">
        </div>
        <div class="mb-4">
            <label for="class" class="block text-gray-700 font-bold mb-2">Clase</label>
            <input type="text" id="class" name="class" value="{{ $character->class }}" class="form-input rounded-md shadow-sm w-full" placeholder=" Clase">
        </div>
        <div class="mb-4">
            <label for="spec" class="block text-gray-700 font-bold mb-2">Especializacion</label>
            <input type="text" id="spec" name="spec" value="{{ $character->spec }}" class="form-input rounded-md shadow-sm w-full" placeholder=" Especializacion">
        </div>
        <div class="mb-4">
            <label for="role" class="block text-gray-700 font-bold mb-2">Rol</label>
            <input type="text" id="role" name="role" value="{{ $character->role }}" class="form-input rounded-md shadow-sm w-full" placeholder="DPS">
        </div>
        <div class="mb-4">
            <label for="core" class="block text-gray-700 font-bold mb-2">Core</label>
            <input type="text" id="core" name="core" value="{{ $character->core }}" class="form-input rounded-md shadow-sm w-full" placeholder=" Principal">
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit</button>
        </div>
        <div class="mb-4">
            <a href="{{ route('characters.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Return</a>
        </div>  
    </form>
</div>

@endsection