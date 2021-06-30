@extends('layouts.app')

@section('title', 'Lista de Tareas')

@section('content')
    <h1>Lista de Tareas</h1>
    <div class="row">
        <div class="form-group col-md-12">
        <table data-toggle="table">
            <thead>
                <tr>
                    <th data-sortable="true">ID</th>
                    <th data-sortable="true">Titulo</th>
                    <th data-sortable="true">Descripción</th>
                    <th data-sortable="true">Fecha de creación</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tareas as $tarea)
                <tr>
                    <td><a href="tarea/{{ $tarea->id }}">{{ $tarea->id }}</a></td>
                    <td><a href="tarea/{{ $tarea->id }}">{{ $tarea->titulo }}</a></td>
                    <td><a href="tarea/{{ $tarea->id }}">{{ $tarea->descripcion }}</a></td>
                    <td><a href="tarea/{{ $tarea->id }}">{{ $tarea->created_at }}</a></td>
                    <td>
                        <form action="/tarea/{{ $tarea->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="tarea/{{ $tarea->id }}/edit" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                            <button class="border-0 bg-transparent" type="submit" data-toggle="tooltip" title="Remove"><i class="fa fa-trash-alt text-danger"></i></button>
                        </form>
                     </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
