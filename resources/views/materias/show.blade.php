@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold mb-6">Lista de Actividades</h1>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="text-left py-2 px-4">Tipo</th>
                        <th class="text-left py-2 px-4">Calificación</th>
                        <th class="text-left py-2 px-4">Fecha</th>
                        <th class="text-left py-2 px-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actividades as $actividad)
                        <tr>
                            <td class="py-2 px-4">{{ $actividad->tipo }}</td>
                            <td class="py-2 px-4">{{ $actividad->calificacion }}</td>
                            <td class="py-2 px-4">{{ $actividad->fecha }}</td>
                            <td class="py-2 px-4">
                                <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST" class="inline">
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
