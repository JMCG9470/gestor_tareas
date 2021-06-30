@extends('layouts.app')

@section('title', 'Ver Tarea')

@section('content')
    <h1>proyecto ID {{ $proyecto->id }}</h1>
    <p><b>Título: </b>{{ $proyecto->titulo }}</p>
    <p><b>Descripción: </b>{{ $proyecto->descripcion }}</p>
    <p><b>Creado: </b>{{ $proyecto->created_at }}</p>
    <p><b>Modificado: </b>{{ $proyecto->updated_at }}</p>
    <div class="btn-group" role="group" aria-label="Basic example">
        <form action="/proyecto/{{ $proyecto->id }}" method="POST">
            @csrf
            @method('delete')
            <a href="../proyecto" class="btn btn-primary">Lista de proyectos</a>
            <a href="../proyecto/{{ $proyecto->id }}/edit" class="btn btn-primary">Editar proyecto</a>
            <button type="submit" class="btn btn-danger">Eliminar proyecto</button>
        </form>
    </div>
@endsection
