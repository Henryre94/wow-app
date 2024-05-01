@extends('characters.layout')

@section('content')

<div class="container mx-auto py-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Informacion de personaje</h2>
        <div>
            <p class="text-lg mb-2"><strong>Nombre:</strong> {{ $character->name }}</p>
            <p class="text-lg mb-2"><strong>Clase:</strong> {{ $character->class }}</p>
            <p class="text-lg mb-2"><strong>Especializacion: </strong>{{ $character->spec }}</p>
            <p class="text-lg mb-2"><strong>Role:</strong> {{ $character->role }}</p>
            <p class="text-lg mb-2"><strong>Core:</strong> {{ $character->core }}</p>
        
        </div>
    </div>
</div>

@endsection