@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold mb-6">Agregar Nueva Materia</h1>
        <form action="{{ route('materias.store') }}" method="POST" class="max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Materia</label>
                <input type="text" name="nombre" id="nombre" class="border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-lg w-full">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Guardar Materia</button>
        </form>
    </div>
@endsection
