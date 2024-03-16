@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold mb-6">Agregar Nueva Actividad</h1>
        <form action="{{ route('actividad.store') }}" method="POST" class="max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="tipo" class="block text-gray-700 font-bold mb-2">Tipo de Actividad</label>
                <input type="text" name="tipo" id="tipo" class="border-gray-300 focus:border-cyan-500 focus:ring focus:ring-cyan-200 rounded-lg w-full">
            </div>
            <div class="mb-4">
                <label for="calificacion" class="block text-gray-700 font-bold mb-2">Calificación</label>
                <input type="number" name="calificacion" id="calificacion" class="border-gray-300 focus:border-cyan-500 focus:ring focus:ring-cyan-200 rounded-lg w-full">
            </div>
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700 font-bold mb-2">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="border-gray-300 focus:border-cyan-500 focus:ring focus:ring-cyan-200 rounded-lg w-full">
            </div>
            <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">Guardar Actividad</button>
        </form>
    </div>
@endsection
