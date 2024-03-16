@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold mb-6">Editar Actividad</h1>
        <form action="{{ route('actividades.update', $actividad->id) }}" method="POST" class="max-w-lg">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="tipo" class="block text-gray-700 font-bold mb-2">Tipo de Actividad</label>
                <input type="text" name="tipo" id="tipo" value="{{ $actividad->tipo }}" class="border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-lg w-full">
            </div>
            <div class="mb-4">
                <label for="calificacion" class="block text-gray-700 font-bold mb-2">Calificación</label>
                <input type="number" name="calificacion" id="calificacion" value="{{ $actividad->calificacion }}" class="border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-lg w-full">
            </div>
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700 font-bold mb-2">Fecha</label>
                <input type="date" name="fecha" id="fecha" value="{{ $actividad->fecha }}" class="border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-lg w-full">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Actualizar Actividad</button>
        </form>
    </div>
@endsection
