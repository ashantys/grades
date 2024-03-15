@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold mb-6">Editar Materia</h1>
        <form action="{{ route('materias.update', $materia->id) }}" method="POST" class="max-w-lg">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Materia</label>
                <input type="text" name="nombre" id="nombre" value="{{ $materia->nombre }}" class="border-gray-300 shadow-md h-10 focus:border-cyan-500 focus:ring focus:ring-blue-200 rounded-lg w-full">
            </div>
            <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">Actualizar Materia</button>
        </form>
    </div>
@endsection
