@extends('tema.app')

@section('title', "Listado de tareas")

@section('contenido')

<h3> Listado de tareas</h3>
<table class="table table-stripped table-hover">
    <thead>
        <tr>
                <th>
                    Name
                </th>
                <th>
                    Description
                </th>
                <th>
                    State
                </th>
                <th>
                    Register_date
                </th>
                <th>
                    Finished_date
                </th>
                <th>
                    Change_date
                </th>
                <th>
                    Opciones
                </th>
            </tr>
    </thead>
    <tbody>
        @foreach ($tareas as $tarea)
        <tr>
            <td>
                {{ $tarea ->name}}
            </td>
            <td>
                {{ $tarea ->description}}
            </td>
            <td>
                {{ $tarea ->state()}}
            </td>
            <td>
                {{ $tarea ->register_date->format('H:i  d / m / y')}}
            </td>
            <td>
                {{ $tarea ->finished_date->format('H:i  d / m / y')}}
            </td>
            <td>
                {{ $tarea ->change_date->format('H:i  d / m / y')}}
            </td>
            
            <td>
               <a href="{{ route('tarea.edit', $tarea) }}">Editar</a>
               
               <a href="{{ route('tarea.edit', $tarea) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection