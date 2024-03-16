@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold mb-6">Lista de Materias</h1>

        <div clas="">
            <a href="{{ route('materias.create') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded m-4">Agregar Materia</a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden m-10">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="text-left py-2 px-4">Nombre</th>
                        <th class="text-left py-2 px-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materias as $materia)
                        <tr>
                            <td class="py-2 px-4"><a href="{{ route('materias.edit', $materia->id) }}">{{ $materia->nombre }}</a></td>
                            <td class="py-2 px-4">
                                <a href="{{ route('materias.show', $materia->id) }}"  class="text-cyan-500 hover:text-cyan-700 inline-flex items-center">Ver Tareas</a>
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
