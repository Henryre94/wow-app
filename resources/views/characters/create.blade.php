@extends('characters.layout')

@section('title', 'Create character')

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

<div class="flex justify-center items-center h-screen bg-slate-800">
    <div class="max-w-md bg-red-400 rounded p-8 shadow-md">
        <h2 class="text-2xl mb-4">Create Character</h2>
        <form method="POST" action="{{ route('characters.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                <input type="text" id="name" name="name" class="form-input rounded-md shadow-sm w-full" placeholder=" Nombre">
            </div>
            <div class="mb-4">
                <label for="class" class="block text-gray-700 font-bold mb-2">Clase</label>
                <input type="text" id="class" name="class" class="form-input rounded-md shadow-sm w-full" placeholder=" Clase">
            </div>
            <div class="mb-4">
                <label for="spec" class="block text-gray-700 font-bold mb-2">Especializacion</label>
                <input type="text" id="spec" name="spec" class="form-input rounded-md shadow-sm w-full" placeholder=" Especializacion">
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700 font-bold mb-2">Rol</label>
                <input type="text" id="role" name="role" class="form-input rounded-md shadow-sm w-full" placeholder=" Rol">
            </div>
            <div class="mb-4">
                <label for="core" class="block text-gray-700 font-bold mb-2">Core</label>
                <input type="text" id="core" name="core" class="form-input rounded-md shadow-sm w-full" placeholder=" Principal">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit</button>
            </div>
            <div class="mb-4">
                <a href="{{ route('characters.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Return</a>
            </div>  

        </form>
  

    </div>
</div>



@endsection