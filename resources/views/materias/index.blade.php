@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold mb-6">Lista de Materias</h1>
        <a href="{{ route('materias.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mb-4">Agregar Materia</a>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="text-left py-2 px-4">ID</th>
                        <th class="text-left py-2 px-4">Nombre</th>
                        <th class="text-left py-2 px-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materias as $materia)
                        <tr>
                            <td class="py-2 px-4">{{ $materia->id }}</td>
                            <td class="py-2 px-4">{{ $materia->nombre }}</td>
                            <td class="py-2 px-4">
                                <a href="{{ route('materias.edit', $materia->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                                <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
