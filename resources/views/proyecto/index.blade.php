@extends('layouts.app')

@section('title', 'Lista de proyectos')

@section('content')
    <h1>Lista de proyectos</h1>
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
                @foreach ($proyectos as $proyecto)
                <tr>
                    <td><a href="proyecto/{{ $proyecto->id }}">{{ $proyecto->id }}</a></td>
                    <td><a href="proyecto/{{ $proyecto->id }}">{{ $proyecto->titulo }}</a></td>
                    <td><a href="proyecto/{{ $proyecto->id }}">{{ $proyecto->descripcion }}</a></td>
                    <td><a href="proyecto/{{ $proyecto->id }}">{{ $proyecto->created_at }}</a></td>
                    <td>
                        <form action="/proyecto/{{ $proyecto->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="proyecto/{{ $proyecto->id }}/edit" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
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
